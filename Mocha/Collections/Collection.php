<?php 
namespace Mocha\Collections; 

/**
 * Base collection class for Mocha
 */
class Collection implements \Countable, \Iterator {
	protected $elements = [];
	private $index = 0;

	/**
	 * Count the number of elements that are
	 * in our collection
	 * @return
	 */
	public function count() : int {
		return count($this->elements);
	}

	public function current() : mixed {
		if( $this->elements[$this->index] ) {
			return $this->elements[$this->index];
		}
		return false;
	}

	public function key() : scalar {
		$key = $this->elements[$this->index];
		if (array_key_exists($key, $this->elements)) {
			return key($key);
		}
	}

	public function next() : void {
		$this->index++;
	}

	public function rewind() : void {
		$this->index = 0;
	}

	public function valid() : bool {
		return array_key_exists($this->elements[$this->index], $this->elements) ? 1 : 0;
		// return 1;
	}

}
