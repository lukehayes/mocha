<?php
namespace Mocha\Reader;

use Mocha\Exception\FileNotFoundException;

/**
 * Read in contents from a file
 */
class FileReader implements ReaderInterface {

    /**
     * Name of the file to read
     * @var
     */
    private $file = NULL;

    /**
     * Constructor
     * @param string $file Path to the file
     */
    public function __construct($file) {
        $this->file = $file;
    }

    /**
     * Open a file, read it and return as a string
     * @param  string $file Path to file
     * @return string Read data in
     *
     * @throws Mocha\Exception\FileNotFoundException
     */
    public function read() : string {

        if ( ! file_exists($this->file) ) {
            throw new FileNotFoundException($this->file);
        }

        $contents = file_get_contents($this->file);

        return $contents;
    }
}
