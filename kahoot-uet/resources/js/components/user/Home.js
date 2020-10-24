import { Button } from 'bootstrap';
import React, {Component} from 'react';
import { HashRouter, Link } from "react-router-dom";
import RouterPath from "../../routers/RouterPath.js";

class Home extends Component {
    render() {
        return (
        <div>
            <h1>Welcome to Home!</h1>
            <button>
                <Link to={'/kahoots'} />
                asda
            </button>
            <RouterPath />
        </div>
        // <div>
        //     <h1>Welcome to Home!</h1>
        // </div>
        )
    }
}

export default Home