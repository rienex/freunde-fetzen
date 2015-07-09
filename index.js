/*eslint-env node*/

'use strict';

var express = require('express'),
    indexController = require('./controllers/index'),
    forumController = require('./controllers/forum');

var server = express(),
    port = 3000;

server
    .use('/', indexController)
    .use('/forum', forumController)
    .listen(port, function () {
        console.log('Prototype listening at http://localhost:%s', port);
    });
