import React from 'react';
import {BrowserRouter, Switch, Route} from 'react-router-dom';
import App from "./App";
import Info from "./components/Info";
import Meals from "./components/Meals";
import Contact from "./components/Contact";
import Ingredients from "./components/Ingredients";

const Router = () => (
	<BrowserRouter>
	<Switch>
		<Route path = "/" component = {App} exact/>
		<Route path = "/recipe/:id" component = {Info}/>
		<Route path = "/mymeals" component = {Meals}/>
		<Route path = "/contact" component = {Contact}/>
		<Route path = "/ingredients" component = {Ingredients}/>
	</Switch>
	</BrowserRouter>
);

export default Router;
