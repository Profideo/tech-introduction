var Redux = require('redux');

module.exports = function () {
    return Redux.applyMiddleware(
        require('./middleware/api') //http://redux.js.org/docs/advanced/Middleware.html#middleware
    )
    (Redux.createStore)
    (Redux.combineReducers({
        items: require('./reducers/workspace')
    }));
};
