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
     * @var string|NULL The entire original tag that matched.
     */
    private $fullTag = NULL;

    /**
     * Constructor.
     * @param string $title
     * @param string $value
     * @param string $fullTag
     */
    public function __construct($title, $value, $fullTag = NULL) {
        $this->title = $title;
        $this->value = $value;
        $this->fullTag = $fullTag;
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
     * FullTag getter for an AnnotationMatch
     * @return string | NULL
     */
    public function getFullTag() {
        return $this->fullTag;
    }
}


