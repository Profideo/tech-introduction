var React = require('react');
var ReactDOM = require('react-dom');


module.exports = React.createClass({
    displayName: 'firstname',

    propTypes: {
        text: React.PropTypes.string.isRequired
    },
    contextTypes: {
        backgroundColorFirst: React.PropTypes.string
    },

    render: function () {
        return (
                <span style={{ background: this.context.backgroundColorFirst || 'white' }}> { this.props.text } </span>
        );
    }
});