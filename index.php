<?php


//Turn on error reporting
ini_set('display_errors',1);
error_reporting(E_ALL);

//Require the autoload file
require_once('vendor/autoload.php');

//Always start the session after the autoload
session_start();


//Create an instance of the Base class
$f3 = Base::instance();

//Turn on Fat-Free error reporting
$f3->set('DEBUG',3);

//Define a default route
$f3->route('GET /', function($f3)
{


});




//Run fat free
$f3->run();
