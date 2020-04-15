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
    private $markdown_file = NULL;
    
    /**
     * Individual lines of markdown
     *
     * @var array
     */
    private $lines = [];

    public function __construct($markdown_file) {

        if( ! is_string($markdown_file) ) {
            throw new \Exception("Data passed into constructor must be a string!");
        }

        // Strip all of the \n characters for easier parsing
        $this->markdown_file = str_replace("\n"," ", $markdown_file);
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
        $split = preg_split('#\n#',$this->markdown_file);
        
        // Filter through split to remove empty lines
        $this->lines = array_filter($split, function($line) {
            if( ! empty($line) ) {
                return $line;
            }
        });

        return $this->lines;
    }

}
