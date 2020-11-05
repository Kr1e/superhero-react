import React, { Component } from 'react';
import axios from 'axios';

export class Superheroes extends Component {
	state = {
		superheroes: [],
		isLoaded: false
	}

	componentDidMount() {
		axios.get('http://localhost:10120/wp-json/superhero-react/v1/index')
			.then(
				res => this.setState({
					superheroes: res.data,
					isLoaded: true
			}))
			.catch( err => console.log(err) );
	}

	render() {
		const { superheroes, isLoaded } = this.state;
		console.log(superheroes);
		if(isLoaded){
			return (
				<div>
					<h3>Superheroes: </h3>
					{
						superheroes.map(superhero => (
							<h4>{ superhero.id + '. ' + superhero.name }</h4>
						))
					}</div>

			);
		} else { return ( <h4>Not loaded</h4>)}
	}
}

export default Superheroes;