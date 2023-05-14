<?php

require_once 'vendor/autoload.php';
//require_once 'app/classes/HelloWorld.php';

use App\classes\HelloWorld;

$helloworld = new HelloWorld();
$helloworld->index();