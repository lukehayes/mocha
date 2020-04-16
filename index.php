<?php
require "vendor/autoload.php";

use Mocha\Reader\FileReader;

//$config = $configObject->parse();

//$fr = new FileReader("pages/hello.md");
$parsedown = new Parsedown();

//foreach(new DirectoryIterator($config['pages_dir']) as $f) {

    //if( $f->getExtension() == "md" ) {
        //$reader = new FileReader($f->getPathname());
        //echo $parsedown->text($reader->read());
    //}
//}

generate(1,2);
