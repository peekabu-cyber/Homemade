import React from 'react';
import Nav from "./Nav";
class Meals extends React.Component {
    render(){

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