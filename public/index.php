<?php

require_once '../vendor/autoload.php';

$hello = new App\Wcs\Hello();
echo $hello -> talk();
$sayHello = new HelloWorld\SayHello();
echo $sayHello -> world();

?>