<?php
namespace Mocha\Reader;

/**
 * Reader Interface for reading in data
 */
interface ReaderInterface {

    /**
     * Read in some data
     * @return string Read data in
     */
    public function read() : string;
}