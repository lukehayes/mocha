<?php
require "vendor/autoload.php";

use Mocha\Annotation\Annotation;
use Mocha\Annotation\Tag;
use Mocha\Reader\FileReader;
use Mocha\Parser\MarkdownParser;
use Mocha\Parser\ConfigParser;

$configObject = new ConfigParser();
$config = $configObject->parse();

$a = new Annotation();

$fr = new FileReader("front-end/hello.md");
dump($fr->read());


