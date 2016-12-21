var React = require('react');
var Redux = require('react-redux');
var ReactDOM = require('react-dom');

var Input = require('./input');
var Value = require('./value');

module.exports = React.createClass({
    displayName: 'item',

    propTypes: {
        id: React.PropTypes.number.isRequired,
        firstname: React.PropTypes.string.isRequired,
        lastname: React.PropTypes.string.isRequired,
        edition: React.PropTypes.bool.isRequired
    },

    contextTypes: {
        storeValue: React.PropTypes.func.isRequired
    },

    getInitialState: function () {
        return {
            edition: this.props.edition
        };
    },

    handleChange: function (name, value) {
        var data = {};
        data[ 'id' ] = this.props.id;
        data[ name ] = value;
        this.context.storeValue(data, function () {
            this.setState({ edition: false });
        }.bind(this));
    },
    handleClick: function () {
        this.setState({ edition: ! this.state.edition });
    },

    render: function () {
        return (
            <tr>
                <td> { this.props.id } </td>
                <td onClick={ this.handleClick }> { this.renderContent('firstname', this.props.firstname) } </td>
                <td> { this.props.lastname } </td>
            </tr>
        );
    },

    renderContent: function(name, value) {

        if (this.props.edition || this.state.edition ) {
            return (
                <Input
                    key="input"
                    value={ value }
                    name={ name }
                    onChange={ this.handleChange }
                    />
            );
        }

        return (
            <Value
                key="value"
                value={ value }
                />
        )
    }
});