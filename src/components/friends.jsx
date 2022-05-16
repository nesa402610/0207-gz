import React from 'react';
import {NavLink} from "react-router-dom";

const TableRow = (props) => {
    return (
        <tr>
            <th scope="row">{props.index + 1}</th>
            <td>{props.id}</td>
            <td><NavLink to={'/profile/' + props.id}>
                {props.name} {props.lastname}
            </NavLink></td>
        </tr>
    );
};
const Friends = (props) => {
    const users = props.function();
    let usersCount = Object.keys(users).length;
    let userRow = [];

    for (let i = 0; i < usersCount; i++) {
        userRow.push(<TableRow index={i} name={users[i].name} id={users[i].id} lastname={users[i].lastname} key={i}/>);
    }
    return (
        <table className="table table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">ID</th>
                <th scope="col">Фамилия и имя</th>
            </tr>
            </thead>
            <tbody>
            {userRow}
            </tbody>
        </table>
    );
};

export default Friends;