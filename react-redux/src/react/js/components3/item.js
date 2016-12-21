var React = require('react');
var ReactDOM = require('react-dom');

var Firstname = require('./firstname');
var Lastname = require('./lastname');

module.exports = React.createClass({
    displayName: 'item',

    propTypes: {
        id: React.PropTypes.any.isRequired,
        firstname: React.PropTypes.string.isRequired,
        lastname: React.PropTypes.string.isRequired
    },

    render: function () {
        return (
            <tr>
                <td> { this.props.id } </td>
                <td> <Firstname text={ this.props.firstname } /></td>
                <td> <Lastname text={ this.props.lastname } /> </td>
            </tr>
        );
    }
});