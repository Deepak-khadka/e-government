import React, {Component} from 'react';
import axios from "axios";

export default class ProfileEditForm extends Component {
    state = {
        name : '',
        email : '',
    }
    handleChangeName = event => {
        this.setState({name : event.target.value });
    };

    handleChangeEmail = event => {
        this.setState({ email : event.target.value });
    };

   handleSubmit = event => {
       event.preventDefault();

       const userName = {
           name: this.state.name,
       }

       const email = {
           email: this.state.email,
       }

       axios.post('http://e-government.bro/profile_submit',{  userName, email })
           .then( res => {
               console.log(res);
               console.log(res.data);
           })
   }

    render() {
        return (
            <div className="container-fluid">
                    <form onSubmit={this.handleSubmit}>
                        <div className="row">
                            <div className="col-6">
                                <input type="text" className="form-control" name="name" placeholder="Enter Full Name" onChange={this.handleChangeName}/>
                            </div>
                            <div className="col-6">
                                <input type="email" className="form-control" name="name" placeholder="Enter Email" onChange={this.handleChangeEmail}/>
                            </div>
                        </div>
                        <br/>
                        <input type="submit" value="Submit" className="btn btn-primary"/>
                     </form>
            </div>
        );
    }
}
