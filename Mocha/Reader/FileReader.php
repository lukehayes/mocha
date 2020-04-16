<?php
namespace Mocha\Reader;

use Mocha\Exception\FileNotFoundException;

/**
 * Read in contents from a file
 */
class FileReader implements ReaderInterface {

    /**
     * Name of the file to read
     *
     * @var
     */
    private $file = NULL;

    /**
     * Constructor
     *
     * @param string $file Path to the file
     */
    public function __construct($file) {
        $this->file = $file;
    }

    /**
     * Static factory method for creating a FileReader object
     *
     * @param string $filename    The name of the file we want to read
     *
     * @return FileReader
     */
    public static function create(string $filename) {
        return new FileReader($filename);
    }

    /**
     * Open a file, read it and return as a string
     *
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
