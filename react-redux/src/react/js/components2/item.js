var React = require('react');
var ReactDOM = require('react-dom');


module.exports = React.createClass({
    displayName: 'item',

    propTypes: {
        id: React.PropTypes.any.isRequired,
        firstname: React.PropTypes.string.isRequired,
        lastname: React.PropTypes.string.isRequired
    },

    getInitialState: function() {
        return {
            background: 'white'
        };
    },

    changeBackground: function() {
        if (this.state.background == 'red')
            this.setState({ background: 'white' });
        else
            this.setState({ background: 'red' });
    },

    render: function () {
        console.log("RENDER ME");
        return (
            <tr>
                <td style={{ background: this.state.background }}> { this.props.id } </td>
                <td> { this.props.firstname } </td>
                <td> { this.props.lastname } </td>
                <td> <button onClick={ this.changeBackground }>Change background</button></td>
            </tr>
        );
    }
});