var requests = require('./client/local');

module.exports = function (contract) {
    return {
        getItems: function (callback) {
            requests.loadItems(contract, function (error, data) {
                if (error) callback(error);
                else callback(null, data);
            });
        },

        setValue: function (value, callback) {
            requests.storeValue(value, function (error, data) {
                if (error) callback(error);
                else callback(null, data);
            });
        }
    }
};