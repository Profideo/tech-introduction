var React = require('react');
var ReactDOM = require('react-dom');


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
                <td> { this.props.firstname } </td>
                <td> { this.props.lastname } </td>
            </tr>
        );
    }
});