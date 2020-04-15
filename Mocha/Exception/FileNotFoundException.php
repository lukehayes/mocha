<?php
namespace Mocha\Exception;

/**
 * Custom execption for when a file could not be found
 */
class FileNotFoundException extends \Exception {

    public function __construct($file) {
        $message = "The file {$file} could not be found.";
        parent::__construct($message);
    }
}

