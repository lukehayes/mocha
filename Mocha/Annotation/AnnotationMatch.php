<?php
use Mocha\Annotation;

/**
 * An object to hold any match that is found when parsing
 */
class AnnotationMatch {

    /**
     * The name of the found match
     * @var
     */
    private $title = NULL;

    /**
     * The value of the found match
     * @var
     */
    private $value = NULL;

    public function __construct($title, $value) {
        $this->title = $title;
        $this->value = $value;
    }
    
    /**
     * Title getter for an AnnotationMatch
     *
     * @return string | NULL
     */
    public function getTitle() {
        return $this->title;

    }
    /**
     * Value getter for an AnnotationMatch
     *
     * @return string | NULL
     */
    public function getValue() {
        return $this->value;
    }

}


