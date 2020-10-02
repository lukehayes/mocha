<?php
namespace Mocha\Annotation;

/**
 * Tag class holds regular expressions that should match
 * tags that have special meaning inside Mocha.
 */
class Tag {

	/**
	 * Any '@mocha-'' tag
	 */
	const MOCHA_TAG = "/@mocha-(\w+)\s([a-z]+|\d{2}-\d{2}-\d{2,4})/i";

	/**
	 * Represents the '@mocha-date' annotation
	 */
	const MOCHA_DATE = "/(@mocha-date)\s(\d{2}-\d{2}-\d{2,4})/";

	/**
	 * Represents the '@mocha-title' annotation
	 */
	const MOCHA_TITLE = "/(@mocha-title)(\s([a-zA-Z]+))+/";
}

