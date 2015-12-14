import ReactDOM from 'react-dom';
import React, { Component, PropTypes } from 'react'
import UserImage from './UserImage';
import axios from 'axios';

class NudgeApp extends Component {
  constructor() {
    super();

    this.fetchUsers = this.fetchUsers.bind(this);
    this.nudgeUser = this.nudgeUser.bind(this);

    this.state = { currentPage: 1, lastPage: 0, users: [], nudges: [] };
  }

  componentWillMount() {
    axios.get(`/api/nudges`)
      .then(response => this.setState({ 
        nudges: response.data
      }));
    this.fetchUsers(1);
  }

  changePage(value) {
    this.fetchUsers(this.state.currentPage + value);
    this.setState({ currentPage: this.state.currentPage + value });
  }

  fetchUsers(page) {
    const currentUser = this.state.currentUser;

    axios.get(`/api/users?page=${page}`)
      .then(response => this.setState({ 
        users: response.data.data,
        lastPage: response.data.last_page 
      }));
  }

  nudgeUser(receiverId) {
    console.log(receiverId);
    axios.post(`/api/nudges/${receiverId}`)
      .then(response => this.setState({ 
        nudges: response.data
      }));
  }

  render() {
    return (
      <div>
        <h1>Click on a face to nudj them!</h1>
        <div className="row">
          {this.state.users.map(user =>
            <UserImage key={user.id}
                       id={user.id}
                       name={user.name}
                       dob={user.dob}
                       town={user.town}
                       photoUrl={user.photo_url}
                       nudged={this.state.nudges.find(nudge =>
                         nudge.receiver_id === user.id
                       ) ? true : false}
                       nudgeUser={this.nudgeUser}
            />
          )}
        </div>
        <button className="btn btn-primary arrow-left" 
                disabled={this.state.currentPage === 1} 
                onClick={this.changePage.bind(this, -1)}>
                Back
        </button>
        <button className="btn btn-primary arrow-right"
                disabled={this.state.currentPage >= this.state.lastPage}
                onClick={this.changePage.bind(this, 1)}>
                Forward
        </button>
      </div>
    );
  }
}

ReactDOM.render(<NudgeApp />, document.getElementById('app'));
