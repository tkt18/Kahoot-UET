import React from "react";
import ReactDOM from "react-dom";
import { HashRouter, Link } from "react-router-dom";
import RouterPath from "../../routers/RouterPath.js";
import "../user.css";
import image_logo from "../../images/ClipartKey_2427194.png";
import {
    HouseDoor,
    ListUl,
    BarChartFill,
    PersonCircle
} from "react-bootstrap-icons";

function Header() {
    return (
        <HashRouter>
            <nav className="navbar navbar-expand-lg nav-header">
                <Link to={"/"}>
                    <img src={image_logo} alt="logo" width={100} height={35} />
                </Link>
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
                    <ul className="nav nav-tabs ul-tabs">
                        <li className="nav-item li-tab">
                            <Link to={"/"} className="nav-link">
                                <HouseDoor color="white" class="icons-svg" />
                                Home
                            </Link>
                        </li>
                        <li className="nav-item li-tab">
                            <Link to={"/kahoots"} className="nav-link">
                                <ListUl color="white" class="icons-svg" />
                                Kahoots
                            </Link>
                        </li>
                        <li className="nav-item li-tab">
                            <Link to={"/user-reports"} className="nav-link">
                                <BarChartFill color="white" class="icons-svg" />
                                Reports
                            </Link>
                        </li>
                    </ul>
                </div>

                <Link to={"/creator"}>
                    <button type="button" className="create-button">
                        Create
                    </button>
                </Link>
                <div class="dropdown dropdown-person">
                    <PersonCircle
                        style={{width:"2.4rem",height:"2.4rem"}}
                        color="white"
                        class="icons-svg dropdown-toggle"
                        id="dropdownMenuButton"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                    />
                    <div
                        class="dropdown-menu dropdown-menu-right"
                        aria-labelledby="dropdownMenuButton"
                    >
                        <h6 class="dropdown-header">User Name</h6>
                        <Link to={"/user"} class="dropdown-item">
                            Setting
                        </Link>
                        <Link class="dropdown-item">Sign Out</Link>
                    </div>
                </div>
            </nav>
            {/* RouterPath show components under header */}
            <RouterPath />
        </HashRouter>
    );
}

export default Header;

if (document.getElementById("header")) {
    ReactDOM.render(<Header />, document.getElementById("header"));
}
