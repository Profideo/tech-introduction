var React = require('react');

var Item = require('./item');

module.exports = React.createClass({
    displayName: 'workspace',

    getInitialState: function() {
        return {
            background: 'yellow'
        };
    },

    handleClick: function(event) {
        this.setState({ background: 'red' });
    },

    componentWillUpdate: function(nextProps, nextState) {
        console.log('Workspace : I am updating', nextProps, nextState);

    },

    componentDidUpdate: function() {
        console.log('Workspace : I have been updated');

    },

    render: function () {
        console.log('Workspace : Render');
        return (
            <div>
                <table>
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prénom</th>
                        <th>Nom</th>
                    </tr>
                    </thead>
                    <tbody>
                        <Item id="1" firstname="John" lastname="Doe" background={ this.state.background } />
                        <Item id="2" firstname="Jane" lastname="Birkin" background="purple" />
                    </tbody>
                </table>

                <button onClick={ this.handleClick }>Change Background</button>
            </div>
        );
    }
});
