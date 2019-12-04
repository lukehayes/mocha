
<?php
namespace Mocha\Exception;

/**
 * Custom execption for when a file could not be found
 */
class TemplatesNotFoundException extends \Exception {

    public function __construct($file) {
        $message = "No templates were found";
        parent::__construct($message);
    }
}

