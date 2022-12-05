<?php

header("Access-Control-Allow-Origin: *");
header('Access-Control-Allow-Methods: GET, POST');

var whitelist = ['http://leitstellenspiel.de']
var corsOptionsDelegate = function (req, callback) {
    var corsOptions;
    if (whitelist.indexOf(req.header('Origin')) !== -1) {
        corsOptions = {origin: true} // reflect (enable) the requested origin in the CORS response
    } else {
        corsOptions = {origin: false} // disable CORS for this request
    }
    corsOptions.methods= "GET,HEAD,PUT,PATCH,POST,DELETE"; 
    callback(null, corsOptions) // callback expects two parameters: error and options
}


router.post('/score', cors(corsOptionsDelegate), function (req, res, next) {
    
    res.status(200).send('Ok');
});
