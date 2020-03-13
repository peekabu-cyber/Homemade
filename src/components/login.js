import React, {Component} from "react";
import Nav from './Nav';
import {Link} from "react-router-dom";

class Login extends Component{
    render(){

        return(
            <div>
                <Nav/>
                <div id = "login-form" >
                    <form method="post" action="http://localhost:8000/login.php">
                        <input className="form_input" type="text" name="client_username" placeholder="Enter a username" required/>
                        <input className="form_input" type="password" name="client_password"required/>
                        <button id="btn-savemeal" type= "submit" className="form_btn rounded mx-auto d-block btn btn-danger">Login</button>
                    </form>
                    <h2>Dont have an account<Link to="/signup">sign up now</Link></h2>
                </div>
            </div>
        )
    };
}

export default Login;