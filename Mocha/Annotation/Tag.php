<?php 
namespace Mocha\Annotation;

/**
 * Represents an annotation tag
 */
class Tag {

	/**
	 * Any '@mocha-'' tag
	 */
	const TAG = "/@[a-z]+\-(\w+)/";
}

