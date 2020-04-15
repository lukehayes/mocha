<?php
require "vendor/autoload.php";

use Mocha\Reader\FileReader;
use Mocha\Parser\ConfigParser;


$configObject = new ConfigParser();
$config = $configObject->parse();

$fr = new FileReader("front-end/hello.md");
$parsedown = new Parsedown();

foreach(new DirectoryIterator($config['template_dir']) as $f) {

    if( $f->getExtension() == "md" ) {
        $reader = new FileReader($f->getPathname());
        echo $parsedown->text($reader->read());
    }
}
