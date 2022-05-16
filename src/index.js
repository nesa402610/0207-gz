import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import App from './App';
import reportWebVitals from './reportWebVitals';
import {BrowserRouter} from "react-router-dom";
import {getUser, getUsers} from "./state";

const root = ReactDOM.createRoot(document.getElementById('senpai'));
root.render(
    <BrowserRouter>
        <React.StrictMode>
            <App functions={{key_getUser: getUser, key_getUsers: getUsers}}/>
        </React.StrictMode>
    </BrowserRouter>
);
reportWebVitals();
