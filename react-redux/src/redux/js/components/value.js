var React = require('react');

module.exports = React.createClass({
    displayName: 'value',

    propTypes: {
        value: React.PropTypes.any
    },

    render: function () {
        return (
            <span> { this.props.value } </span>
        );
    }
});
