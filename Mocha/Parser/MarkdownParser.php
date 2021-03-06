<?php
namespace Mocha\Parser;

use Mocha\Reader\FileReader;
use Mocha\Interfaces\ParserInterface;

/**
 * Class that can parse Markdown and convert it
 * into its HTML equivalent
 *
 * @package Mocha\Parser
 */
class MarkdownParser implements ParserInterface {
    
    /**
     * @var string | NULL   The markdown content that we want to parse
     */
    private $markdownFile = NULL;
    
    /**
     * @var array    Holds every line that has been parsed
     */
    private $lines = [];
    
    /**
     * Constructor
     *
     * @param string    The name of the file to parse
     *
     * @throws InvalidArgumentException    If the constructor argument $markdownFile is not a string
     */
    public function __construct($markdownFile) {

        if( ! is_string($markdownFile) ) {
            throw new \InvalidArgumentException("Data passed into constructor must be a string!");
        }

        // Strip all of the \n characters for easier parsing
        $this->markdownFile = FileReader::create($markdownFile)->read() ;
    }
    
    /**
     * Parse the markdown content
     *
     * @return string
     */
    public function parse() {
        $parsed_markdown = [];
        $lines = $this->split();
    }
    

    /**
     * Split the markdown content into individual lines
     *
     * @return array
     */
    private function split() : array {
        
        // Split markdown into lines
        $split = preg_split("/\n/",$this->markdownFile);

        // Filter through split to remove empty lines
        $this->lines = array_filter($split, function($line) {
            if( ! empty($line) ) {
                return $line;
            }
        });
        var_dump($this->lines);

        return $this->lines;
    }

}
