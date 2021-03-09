import React, {Component, useState} from 'react';
import fetchData from "../../includes/FetchData";

class ProfileDetails extends Component {

    componentDidMount() {
        fetchData.GET('/profile').then(res => {
          console.log(res.data)
        })
            .catch(err => {
                console.log(err);
            })
    }

    render() {
        return (
            <div className="card mb-3">
                <div className="card-body">
                    <div className="row">
                        <div className="col-sm-3">
                            <h6 className="mb-0">Full Name</h6>
                        </div>
                        <div className="col-sm-9 text-secondary">
                           Deepak khadka
                        </div>
                    </div>
                    <hr/>
                    <div className="row">
                        <div className="col-sm-3">
                            <h6 className="mb-0">Email</h6>
                        </div>
                        <div className="col-sm-9 text-secondary">
                            deepakkhadka@neputer.com
                        </div>
                    </div>
                    <hr/>
                    <div className="row">
                        <div className="col-sm-3">
                            <h6 className="mb-0">Phone</h6>
                        </div>
                        <div className="col-sm-9 text-secondary">
                            (986) 8284426
                        </div>
                    </div>
                    <hr/>
                    <div className="row">
                        <div className="col-sm-3">
                            <h6 className="mb-0">Mobile</h6>
                        </div>
                        <div className="col-sm-9 text-secondary">
                            (981) 4566338
                        </div>
                    </div>
                    <hr/>
                    <div className="row">
                        <div className="col-sm-3">
                            <h6 className="mb-0">Address</h6>
                        </div>
                        <div className="col-sm-9 text-secondary">
                            Siddhanagar Kohalpur, Banke
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

export default ProfileDetails;
