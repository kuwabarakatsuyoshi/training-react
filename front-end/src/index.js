import React from 'react';
import ReactDOM from 'react-dom';
<<<<<<< HEAD
import './index.css';
import App from './App';
=======
import { BrowserRouter } from "react-router-dom";

import './assets/scss/index.scss';
import Router from './Router';
>>>>>>> upstream/main
import reportWebVitals from './reportWebVitals';

ReactDOM.render(
  <React.StrictMode>
<<<<<<< HEAD
    <App />
=======
    <BrowserRouter>
      <Router />
    </BrowserRouter>
>>>>>>> upstream/main
  </React.StrictMode>,
  document.getElementById('root')
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
