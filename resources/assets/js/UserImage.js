import React, { Component, PropTypes } from 'react'
import getAge from './getAge';

class UserImage extends Component {
  // static propTypes = {
  //   photoUrl: PropTypes.string.isRequired,
  //   name: PropTypes.string.isRequired,
  //   nudged: PropTypes.bool.isRequired,
  //   nudgeUser: PropTypes.func.isRequired
  // }

  render() {
    return (
      <div className="col-md-4">
        <div className="thumbnail">
          {this.props.nudged ? <div className="tick"><i className="fa fa-check-circle"></i></div> : null}
          <img onClick={this.props.nudged ? null : this.props.nudgeUser.bind(this, this.props.id)}
               src={this.props.photoUrl}
               alt={this.props.name} />
        </div>
        <p className="user-info">{this.props.name}, {this.props.town} ({getAge(this.props.dob)} years)</p>
      </div>
    );
  }
}

export default UserImage;
