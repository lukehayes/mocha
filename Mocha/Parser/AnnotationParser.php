<?php
namespace Mocha\Parser;

use Mocha\Reader\FileReader;
use Mocha\Annotation\AnnotationMatch;

/**
 * Class that can parse built in Mocha annotations.
 *
 * @package Mocha\Parser
 */
class AnnotationParser implements ParserInterface {

    /**
     * @var string | NULL   The markdown content that we want to parse
     */
    private $fileContents = NULL;

    /**
     * @var array    Holds every line that has been parsed
     */
    private $lines = [];

    /**
     * Constructor
     *
     * @param string    The name of the file to parse
     *
     * @throws InvalidArgumentException    If the constructor argument $fileContents is not a string
     */
    public function __construct($fileContents) {

        if( ! is_string($fileContents) ) {
            throw new \InvalidArgumentException("Data passed into constructor must be a string!");
        }

        // Strip all of the \n characters for easier parsing
        $this->fileContents = FileReader::create($fileContents)->read() ;
    }

    /**
     * Parse the markdown content
     *
     * @return string
     */
    public function parse() {
        $parsed_markdown = [];
        $lines = $this->split();

        $matchList = [];

        foreach($lines as $line)
        {
            $matches = [];
            $res = preg_match(Tag::MOCHA_TAG, $line, $matches);
            if($res)
            {
                $am = new AnnotationMatch($matches[1] ?? 0, $matches[2] ?? 0, $matches[0]);
                $matchList[] = $am;
            }
            dump($lines);
        }


    }


    /**
     * Split the markdown content into individual lines
     *
     * @return array
     */
    private function split() : array {
        $lines = explode("\n",$this->fileContents);
        return $this->lines;
    }

}
