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
	const TAG = "/@[mocha-]+\-(\w+)/";
}

