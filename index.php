<?php

namespace Wcs;
require_once 'Wcs/Hello.php';
require_once 'SayHello.php';
$hello = new Hello;
$helloWorld = new SayHello;
echo $hello;
echo $helloWorld;

?>