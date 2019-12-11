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
$fr = new FileReader($config["template_dir"] . "/hello.md");

dump(file_get_contents(dirname(__FILE__) . "/" . $config["template_dir"] . "/hello.md"));
$parser = new MarkdownParser($fr->read());
dump($fr);
dump($parser->parse());

//$matches = [];
//$res = preg_match_all(Tag::MOCHA_TAG, $fr->read(), $matches, PREG_PATTERN_ORDER);

//dump($matches);


