module.exports = {
    getItems () {
        return {type: 'LOAD_ITEMS', contract: 1};
    },

    feedWorkspace (state) {
        return {type: 'FEED_WORKSPACE', state: state};
    },

    storeValue (data, callback) {
        return {type: 'FEED_FIELD_VALUE', data: data, callback: callback};
    },

    feedItem (state) {
        return {type: 'FEED_ITEM', state: state};
    }
};