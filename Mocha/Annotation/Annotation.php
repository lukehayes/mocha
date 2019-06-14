<?php 
namespace Mocha\Annotation; 

use Mocha\Annotation\ParserInterface;

/**
 * A base class for annotations
 */
class Annotation implements ParserInterface
{
	
	function __construct() {
	}

    public function parse() {
    }
}

