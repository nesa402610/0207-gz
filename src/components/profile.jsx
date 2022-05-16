import React from 'react';

const Profile = (props) => {
    const user = props.function

    return (
        <div className={'row'}>
            <div className="col-sm-4">
                <img src={user.avatar} alt=""/>
            </div>
            <div className="col-sm-8">
                <h2>{user.name} {user.lastname}</h2>
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