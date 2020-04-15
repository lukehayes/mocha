<?php
require "vendor/autoload.php";

use Mocha\Reader\FileReader;
use Mocha\Parser\ConfigParser;


$configObject = new ConfigParser();
$config = $configObject->parse();

$fr = new FileReader("front-end/hello.md");
$parsedown = new Parsedown();

echo $parsedown->text($fr->read());
