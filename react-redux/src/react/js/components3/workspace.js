var React = require('react');

var Item = require('./item');

module.exports = React.createClass({
    displayName: 'workspace',
    childContextTypes: {
        backgroundColorFirst: React.PropTypes.string,
        backgroundColorSecond: React.PropTypes.string
    },

    getChildContext() {
        return {
            backgroundColorFirst: "yellow",
            backgroundColorSecond: "orange"
        };
    },

    render: function () {
        return (
            <table>
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom</th>
                </tr>
                </thead>
                <tbody>
                    <Item id="1" firstname="John" lastname="Doe" />
                    <Item id="2" firstname="Jane" lastname="Birkin" />
                </tbody>
            </table>
        );
    }
});
