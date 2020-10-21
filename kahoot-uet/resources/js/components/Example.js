import React from "react";
import ReactDOM from "react-dom";
import './test.css';
import image_logo from '../ClipartKey_2427194.png';

function Example() {
    return (
        <nav className="navbar navbar-expand-lg navcss">
            <img src={image_logo} alt="logo" width={100} height={35}/>
            <button
                className="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
            <span className="navbar-toggler-icon"></span>
            </button>
            <div className="collapse navbar-collapse" id="navbarNav">
                <ul className="navbar-nav">
                    <li className="nav-item active">
                        <a className="nav-link" href="#">
                            Home <span className="sr-only">(current)</span>
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">
                            Features
                        </a>
                    </li>
                    <li className="nav-item">
                        <a className="nav-link" href="#">
                            Pricing
                        </a>
                    </li>
                    <li className="nav-item">
                        <a
                            className="nav-link disabled"
                            href="#"
                            tabIndex="-1"
                            aria-disabled="true"
                        >
                            Disabled
                        </a>
                    </li>
                </ul>
            </div>
            <button type="button" className="test">Create</button>
        </nav>
    );
}

export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
