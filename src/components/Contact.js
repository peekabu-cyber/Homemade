import React, {Component} from "react";
import Nav from "./Nav";


class Contact extends Component {
	// constructor(props) {
	// 	super(props);
	// 	this.state = {
	// 		name: '',
	// 		email: '',
	// 		reason: ''
	// 	}
	// }
	//
	// handleSubmit(e) {
	// 	const proxyurl = "https://cors-anywhere.herokuapp.com/";
	//
	// 	e.preventDefault();
	// 	fetch('http://localhost:3001/send',{
	// 		method: "POST",
	// 		body: JSON.stringify(this.state),
	// 		headers : {
	// 			'Content-Type': 'application/json',
	// 			'Accept': 'application/json'
	// 		},
	// 	}).then(
	// 		(response) => (response.json())
	// 	).then((response)=>{
	// 		if (response.status === 'success'){
	// 			alert("Message Sent.");
	// 			this.resetForm()
	// 		}else if(response.status === 'fail'){
	// 			alert("Message failed to send.")
	// 		}
	// 	})
	// }

	render() {
		return (
			<div>
				<Nav/>
				<div id="contact-form">
					<form action="./contact_form.php" method="POST">
						<input type="text" className="form_input contact_name" name="name" placeholder="Name" required/>
						<input type="text" className="form_input contact_email" name="email" placeholder="Email"
							   required/>
						<textarea type="text" className="form-control" rows="10" name="reason"
								  placeholder="Reason for email"> </textarea>
						<button type="submit" className="btn btn-warning form_btn">Submit</button>
					</form>
				</div>
			</div>
			// 		<div>
			// 			<Nav/>
			// 			<div id="contact-form">
			// 				<form action="./testin.php" method = "POST" onSubmit={this.handleSubmit.bind(this)}>
			// 					<input type="text" className="form_input contact_name" name={this.state.name} onChange={this.onNameChange.bind(this)} placeholder="Name" required/>
			// 					<input type = "text" className="form_input contact_email" name={this.state.email} onChange={this.onEmailChange.bind(this)} placeholder="Email" required/>
			// 					<textarea type= "text" className="form-control" rows="10" name={this.state.reason} onChange={this.onReasonChange.bind(this)} placeholder="Reason for email"> </textarea>
			// 					<button type="submit" className="btn btn-warning form_btn">Submit</button>
			// 				</form>
			// 			</div>
			// 		</div>
			// 	);
			// }
			//
			// onNameChange(event) {
			// 	this.setState({name: event.target.value})
			// }
			//
			// onEmailChange(event) {
			// 	this.setState({email: event.target.value})
			// }
			//
			// onReasonChange(event) {
			// 	this.setState({reason: event.target.value})
			// })
		);
	}
}
export default Contact;