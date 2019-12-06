<?php

require "vendor/autoload.php";

use Mocha\Annotation\Annotation;
use Mocha\Annotation\Tag;
use Mocha\Reader\FileReader;
use Mocha\Parser\MarkdownParser;

$a = new Annotation();
$fr = new FileReader("md.md");

$parser = new MarkdownParser($fr->read());
$parser->parse();

//$matches = [];
//$res = preg_match_all(Tag::MOCHA_TAG, $fr->read(), $matches, PREG_PATTERN_ORDER);

//dump($matches);


