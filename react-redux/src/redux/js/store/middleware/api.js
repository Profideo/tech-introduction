//var _ = require('lodash');
var actions = require('../actions');
var Client = require('../client');

module.exports = function (store) {
    var client = null;

    return function (next) {
        return function (action) {
            switch (action.type) {
                case 'LOAD_ITEMS':
                    client = Client(action.contract);

                    client.getItems(function (error, data) {
                        if (error) {
                            console.error(error);
                        } else {
                            store.dispatch(actions.feedWorkspace(data.items));
                        }
                    });

                    break;

                case 'FEED_FIELD_VALUE':

                    if (! client)
                        throw new Error('Client not initialized.');

                    client.setValue(action.data, function (error, data) {
                        store.dispatch(actions.feedItem(action.data));
                        action.callback();
                    });

                    break;
            }

            next(action);
        };
    };
};
