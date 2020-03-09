import React from 'react';
import {Link} from 'react-router-dom';

// const fs = require('fs');
// var data = fs.readFile('meals.json');
// var meals = JSON.parse(data);

class Info extends React.Component {
	render(){
		const recipes = this.props.location.state.recipe;

		// function saveMeal() {
		// 	$.ajax({
		// 		url:"test.php",
		// 		type: "POST",
		// 		success:function(result){
		// 			alert(result);
		// 		}
		// 	});
		// }

		return(
			<div className="info text-capitalize">
				<img src={require("../Images/686220-100819.jpg")} alt="checkers" className="checkers"/>
				<div className="text-center">
					<h1 className="oleo">{recipes.label}</h1>
					<h3>Provided by {recipes.source}</h3>
				</div>
				{/* <img src= {require("../Images/design.png")} alt = "fancy design" id="fancy-design"/> */}
				<div className ="info-image-div">
				<br></br>
				<img src={recipes.image} className="info-image" alt="recipeImage"/>
				</div>
				<div>
					<ul id = "ingredients">
					
					{
						recipes.ingredients.map(x => 
							<li>{x.text}</li>
						)
					}
					</ul>
				</div>
				<button className="btn btn-info" onClick="saveMeal()"><Link to={{pathname: `/meals`}}>Save Meal</Link></button>
			</div>
		);
	}
};

export default Info;