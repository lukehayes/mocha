<?php
namespace Mocha\Interfaces;

/**
 * The Reader interface defines a method that is designed
 * to enable the implementer to read in data from any source.
 */
interface ReaderInterface {

    /**
     * Read the data in from a source.
     *
     * @return string Data that has been read in.
     */
    public function read() : string;
}
