<?php 
namespace Mocha\Annotation;

/**
 * Represents an annotation tag
 */
class Tag {

	/**
	 * Any '@mocha-'' tag
	 */
	const TAG = "/@[mocha-]+\-(\w+)/";
}

