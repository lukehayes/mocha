<?php
namespace Mocha\Annotation;

/**
 * Tag holds const strings that represent
 * possible Mocha tags
 */
class Tag {

	/**
	 * Any '@mocha-'' tag
	 */
	const MOCHA_TAG = "/(@mocha-\w+)\s(\w+)/";

	/**
	 * Represents the '@mocha-date' annotation
	 */
	const MOCHA_DATE = "/(@mocha-date)\s(\d{2}\/){2}\d{2,4} /";

	/**
	 * Represents the '@mocha-title' annotation
	 */
	const MOCHA_TITLE = "/(@mocha-title)(\s([a-zA-Z]+))+/";
}

