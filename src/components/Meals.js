import React from 'react';
import Nav from "./Nav";
import $ from "jquery";

class Meals extends React.Component {
    render(){
    $('#recipes').load('http://localhost:8000/mymeals.php');

        return(
            <div style ={{height:"6000px"}}>
                <Nav/>
                <div id="addOwnMeal"></div>
                <div id="recipes"></div>
            </div>
        )
    }
};

export default Meals;