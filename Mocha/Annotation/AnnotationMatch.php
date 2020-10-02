<?php
namespace Mocha\Annotation;

/**
 * An object to hold any match that is found when parsing
 */
class AnnotationMatch 
{
    /**
     * @var The name of the found match.
     */
    private $title = NULL;

    /**
     * @var The value of the found match.
     */
    private $value = NULL;

    /**
     * @var Extra options for the particular annotation.
     */
    private $options = NULL;

    /**
     * Constructor.
     * @param string $title
     * @param string $value
     * @param string $options
     */
    public function __construct($title, $value, $options = NULL) {
        $this->title = $title;
        $this->value = $value;
        $this->options = $options;
    }
    
    /**
     * Title getter for an AnnotationMatch
     * @return string | NULL
     */
    public function getTitle() {
        return $this->title;

    }

    /**
     * Value getter for an AnnotationMatch
     * @return string | NULL
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Options getter for an AnnotationMatch
     * @return string | NULL
     */
    public function getOptions() {
        return $this->options;
    }
}


