import React, {useEffect, useState} from 'react';
import {NavLink} from "react-router-dom";

const TableRow = (props) => {
    return (
        <tr>
            <th scope="row">{props.index + 1}</th>
            <td>{props.id}</td>
            <td><NavLink to={'/aroma/lk/profile/' + props.id}>
                {props.name} {props.lastname}
            </NavLink></td>
        </tr>
    );
};
const Friends = (props) => {
    let [userRow, setUserRow] = useState([]);
    useEffect(() => {
        props.function().then(users => {
            let usersCount = Object.keys(users).length;
            let userRow = []

            for (let i = 0; i < usersCount; i++) {
                userRow.push(<TableRow
                    index={i}
                    key={i}
                    name={users[i].name}
                    lastname={users[i].lastname}
                    id={users[i].id}
                />)
            }
            setUserRow(userRow)
        });
    }, [props.function]);

    return (
        <table className="table w-full table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Фамилия и имя</th>
            </tr>
            </thead>
            <tbody className={'text-center'}>
            {userRow}
            </tbody>
        </table>
    );

};

export default Friends;