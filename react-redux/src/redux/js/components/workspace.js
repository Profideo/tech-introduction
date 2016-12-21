var React = require('react');
var Redux = require('react-redux');

var actions = require('../store/actions');

var Item = require('./item');

var component = React.createClass({
    displayName: 'workspace',

    propTypes: {
        items: React.PropTypes.array.isRequired,
        storeValue: React.PropTypes.func.isRequired
    },

    childContextTypes: {
        storeValue: React.PropTypes.func.isRequired
    },

    getChildContext: function () {
        return { storeValue: this.props.storeValue };
    },


    render: function () {
        if (! this.props.items.length) {
            return (
                <p className="revision-loading">
                    Chargement en cours...
                </p>
            );
        }

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
                    { this.props.items.map(this.renderItem) }
                </tbody>
            </table>
        );


    },

    renderItem (item) {
        return <Item key={ item.id } edition={ item.edition } { ...item.state } />;
    }
});

var connect = Redux.connect(
    function (state) {
        return {
            items: state.items
        };
    },
    function (dispatch) {
        return {
            storeValue: function (data, callback) { dispatch(actions.storeValue(data, callback)) }
        };
    }
);

module.exports = connect(component);
