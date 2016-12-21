module.exports = {
    loadItems: function (contract, callback) {
        var url = '/js/store/client/loadItems.json';

        $.ajax({
            url: url,
            dataType: 'json',
            async: false,
            cache: false,
            success: function(data) {
                callback(null, data);
            },
            error: function (xhr, status, err) {
                console.error(url, err.toString());
            }
        });
    },
    storeValue: function (value, callback) {

        $.ajax({
            url: '/store.php',
            method: 'POST',
            data: value
        }).done(function() {
            callback(null);
        }).fail(function(xhr, status, err) {
            callback(err.toString());
        });
    }
};