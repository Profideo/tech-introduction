var React = require('react');
var ReactDOM = require('react-dom');


module.exports = React.createClass({
    displayName: 'item',

    propTypes: {
        id: React.PropTypes.any.isRequired,
        firstname: React.PropTypes.string.isRequired,
        lastname: React.PropTypes.string.isRequired,
        background: React.PropTypes.string.isRequired
    },

    componentWillReceiveProps(nextProps) {
        console.log('Item : Receive new props');
        console.log(nextProps);
    },

    shouldComponentUpdate(nextProps, nextState) {
        console.log('Item : Evaluating shouldComponentUpdate', nextProps, this.props);

        return nextProps.background != this.props.background;
    },

    render: function () {
        console.log('Item : Render ' + this.props.firstname + ' ' + this.props.lastname);

        return (
            <tr style={{ background: this.props.background }}>
                <td> { this.props.id } </td>
                <td> { this.props.firstname } </td>
                <td> { this.props.lastname } </td>
            </tr>
        );
    }
});