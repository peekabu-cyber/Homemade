import React, {Component} from "react";
import {Link} from 'react-router-dom';

class Nav extends Component{
    render(){

        return(
            <nav className = "navbar sticky-top App-header">
                <header><Link to={{pathname: "/"}}>
                    <h1 className="App-title">Homemade</h1>
                </Link></header>
                <div id="navbarText">
                    <ul className="nav justify-content-center mr-auto">
                        <li className="nav-item"><Link className="nav-link" to ={{pathname: "/mymeals"}} >Meals</Link></li>
                        <li className="nav-item"><Link className="nav-link" to={{pathname: "/ingredients"}}>Ingredients</Link></li>
                        <li className="nav-item"><Link className="nav-link" to ={{pathname: "/contact"}}>Contact</Link></li>
                    </ul>
                </div>
            </nav>
        )
    };
}

export default Nav;