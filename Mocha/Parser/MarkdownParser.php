<?php
namespace Mocha\Parser;

/**
 * Class that can parse Markdown and convert it
 * into its HTML equivalent
 *
 * @package Mocha\Parser
 */
class MarkdownParser implements ParserInterface {
    
    /**
     * The markdown content that we want to parse
     *
     * @var string | NULL
     */
    private $markdown = NULL;
    
    /**
     * Individual lines of markdown
     *
     * @var array
     */
    private $lines = [];

    public function __construct($markdown) {

        if( ! is_string($markdown) ) {
            throw new \Exception("Data passed into constructor must be a string!");
        }

        // Strip all of the \n characters for easier parsing
        $this->markdown = str_replace("\n"," ", $markdown);
    }
    
    /**
     * Parse the markdown content
     *
     * @return string
     */
    public function parse() {
        $parsed_markdown = [];
        $lines = $this->split();

        // TODO
    }
    

    /**
     * Split the markdown content into individual lines
     *
     * @return array
     */
    private function split() : array {

        // Split markdown into lines
        $split = preg_split('#\n#',$this->markdown, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        
        // Filter through split to remove empty lines
        $this->lines = array_filter($split, function($line) {
            if( ! empty($line) ) {
                return $line;
            }
        });

        return $this->lines;
    }

}
