import React from 'react';
// import {Link} from 'react-router-dom';
import $ from 'jquery';

class Info extends React.Component {

    render(){
        const recipes = this.props.location.state.recipe;

        $(document).ready(function () {

            $('#saveMeal').click(function(){
                $.ajax('/savemeals.php',   // request url
                    {
                        success: function (data, status, xhr) {    // success callback function
                            $('p').append(data);
                        }
                    });
            });

        });
        return(

            <div className="info text-capitalize">
                <img src={require("../Images/686220-100819.jpg")} alt="checkers" className="checkers"/>
                <div className="text-center">
                    <h1 className="oleo">{recipes.label}</h1>
                    <h3>Provided by {recipes.source}</h3>
                </div>
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
                <input type="button" id="saveMeal" value="Send Ajax request" />
            </div>
        );

    }

};

export default Info;