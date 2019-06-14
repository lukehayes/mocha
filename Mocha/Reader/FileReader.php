<?php
namespace Mocha\Reader;

use Mocha\Exception\FileNotFoundException;

/**
 * Read in contents from a file
 */
class FileReader implements ReaderInterface {

    /**
     * Open a file, read it and return as a string
     * @param  string $file Path to file
     * @return string Read data in
     *
     * @throws Mocha\Exception\FileNotFoundException
     */
    public function read($file) : string {

        if ( ! file_exists($file) ) {
            throw new FileNotFoundException($file);
        }

        $handle = fopen($file, "r");
        $contents = fread($handle, filesize($file));
        fclose($handle);

        return $contents;
    }
}
