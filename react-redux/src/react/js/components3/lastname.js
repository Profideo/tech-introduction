var React = require('react');
var ReactDOM = require('react-dom');


module.exports = React.createClass({
    displayName: 'lastname',

    propTypes: {
        text: React.PropTypes.string.isRequired
    },
    contextTypes: {
        backgroundColorSecond: React.PropTypes.string
    },

    render: function () {
        return (
            <span style={{ background: this.context.backgroundColorSecond || 'white' }}> { this.props.text } </span>
        );
    }
});