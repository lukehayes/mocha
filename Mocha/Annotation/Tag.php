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
}

