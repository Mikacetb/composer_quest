<?php

use App\Wcs\Hello;
use HelloWorld\SayHello;
require_once '../src/Wcs/Hello.php';
require_once '../vendor/autoload.php';
$hello = new Hello;
$helloWorld = new SayHello;
var_dump($hello);
var_dump($helloWorld);

?>