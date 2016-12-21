var _ = require('lodash');

module.exports = function (state, action) {
    state = state || [];

    console.log(action);

    switch (action.type) {

        case 'FEED_WORKSPACE':
            var items = action.state;

            return items.map(function (item) {
                return { type: 'item', id: item.id, state: item, edition: false };
            });

        case 'FEED_ITEM':
            var itemModified = action.state;

            var index = _.findIndex(state, { id: itemModified.id });

            return _.union(
                state.slice(0, index + 1),
                [
                    _.extend(
                        state[index],
                        {
                            state: _.extend(state[index].state, itemModified)
                        }
                    )
                ],
                state.slice(index + 1)
            );
    }

    return state;
};
