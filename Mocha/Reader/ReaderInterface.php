<?php
namespace Mocha\Reader;

/**
 * Reader Interface for reading in data
 */
interface ReaderInterface {

    /**
     * Read in some data
     * @param  string $file Path to file
     * @return string Read data in
     */
    public function read($file) : string;
}