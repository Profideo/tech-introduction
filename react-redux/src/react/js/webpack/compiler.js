module.exports = {
    entry: {
        javascript: __dirname + '/initialize.js'
    },
    output: {
        filename: 'react.js',
        path: __dirname + '/..'
    },
    module: {
        loaders: [
            { test: /\.js$/, loaders: [ 'jsx' ], exclude: /node_modules/ },
            { test: /\.css$/, loaders: [ 'style', 'css?sourceMap' ], includePaths: [ __dirname + '/../css' ] },
            { test: /\.html$/, loader: 'file' }
        ]
    }
};

