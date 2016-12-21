var React = require('react');
var ReactDOM = require('react-dom');
var Provider = require('react-redux').Provider;

var Workspace = require('../components/workspace');

require('../../css/style.css');

var store = require('../store/factory')();

var container = document.getElementById('container');
ReactDOM.render(<Provider store={ store }><Workspace /></Provider>, container);

var actions = require('../store/actions');
store.dispatch(actions.getItems());
