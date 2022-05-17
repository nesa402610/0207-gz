import React from 'react';
import {useParams} from "react-router-dom";

const Profile = (props) => {
    let param = useParams()
    const user = props.function(param.id);


    return (
        <div className={'flex flex-row'}>
            <div className="w-auto">
                <img src={user.avatar} alt=""/>
            </div>
            <div className="w-8/12">
                <h2>ID: {user.id} {user.name} {user.lastname}</h2>
                <h3>Обо мне</h3>
                <p>
                    {user.about}
                </p>
                <p>{user.email}</p>
            </div>
        </div>
    );
};

export default Profile;