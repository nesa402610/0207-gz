import './index.css'
import {NavLink, Routes, Route} from "react-router-dom";
import Profile from "./components/profile";
import Messages from "./components/messages";
import Settings from "./components/settings";
import Friends from "./components/friends";

function App(props) {
    return (
        <div className="container mx-auto mt-4">
            <div className="flex flex-row">
                <div className="w-2/12">
                    <div className="nav flex flex-col" aria-orientation="vertical">
                        <NavLink className="nav-link p-2" to="/aroma/lk/profile">
                            Профиль
                        </NavLink>
                        <NavLink className="nav-link p-2" to="/aroma/lk/messages">
                            Сообщения
                        </NavLink>
                        <NavLink className="nav-link p-2" to="/aroma/lk/settings" role="tab">
                            Настройки
                        </NavLink>
                        <NavLink className="nav-link p-2" to="/aroma/lk/friends">
                            Друзья
                        </NavLink>
                    </div>
                </div>
                <div className="w-10/12">
                    <Routes>
                        <Route path={'/aroma/lk/profile'} element={<Profile function={props.functions.key_getUser}/>} />
                        <Route path={'/aroma/lk/profile/:id'} element={<Profile function={props.functions.key_getUser}/>} />
                        <Route path={'/aroma/lk/messages'} element={<Messages/>} />
                        <Route path={'/aroma/lk/settings'} element={<Settings/>} />
                        <Route path={'/aroma/lk/friends'} element={<Friends function={props.functions.key_getUsers}/>} />
                    </Routes>
                </div>
            </div>
        </div>


    );
}

export default App;
