<?php
namespace Mocha\Interfaces;

/**
 * The Parser interface defines a method that is designed
 * to enable the implementer to parse a data source.
 */
interface ParserInterface {

    /**
     * Parse the source file.
     *
     * @return mixed The result of the parse.
     */
    public function parse();
}
