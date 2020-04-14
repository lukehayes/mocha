<?php
namespace Mocha\Reader;

/**
 * Reader Interface for reading in data
 */
interface ReaderInterface {

    /**
     * Read the data in
     *
     * @return string Read data in
     */
    public function read() : string;
}
