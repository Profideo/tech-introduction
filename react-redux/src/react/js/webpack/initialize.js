var React = require('react');
var ReactDOM = require('react-dom');

var Workspace = require('../components4/workspace');

require('../../css/style.css');

var container = document.getElementById('container');
ReactDOM.render(<Workspace />, container);
