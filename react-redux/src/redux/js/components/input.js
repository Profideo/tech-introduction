var React = require('react');

module.exports = React.createClass({
    displayName: 'input',

    propTypes: {
        value: React.PropTypes.any,
        name: React.PropTypes.string.isRequired,
        onChange: React.PropTypes.func.isRequired
    },

    getInitialState: function () {
        return { value: this.props.value };
    },

    componentDidMount: function () {
        this.refs.input.focus();
    },

    handleChange: function (event) {
        var value = event.target.value;

        this.setState({ value: value });
        this.props.onChange(this.props.name, value);
    },

    render: function () {
        return (
            <input
                ref="input"
                type="text"
                onBlur={ this.handleChange }
                defaultValue={ this.state.value }
            />
        );
    }
});
