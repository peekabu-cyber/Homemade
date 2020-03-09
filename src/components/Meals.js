import React from 'react';
import Nav from "./Nav";
import Info from "./Info";

class Meals extends React.Component {
	render(){
		// const recipes = this.props.location.state.recipe;
		function mealDelete(){
			for( var i = 0; i < Info.sdd.length; i++){ 
				if (Info.sdd[i] === 5) {
					Info.sdd.splice(i, 1); 
				}
			}
		}
		return(
			<div style ={{height:"6000px"}}>
				<Nav/>
				{
					
				}
			</div>
		)
	}
};

export default Meals;