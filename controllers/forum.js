/*eslint-env node*/

'use strict';

var router = require('express').Router();


router.get('/', function (req, res) {
    res.send('Forum startpage');
});

router.get('/:topic', function (req, res) {
    res.send('Asked for post with topic: ' + req.params.topic);
});

module.exports = router;
