<?php 
namespace Mocha\Collection; 

/**
 * Base collection class for Mocha
 */
class Collection implements \Countable, \Iterator {
	protected $elements = [];
	private $index = 0;

	public function __construct(array $elements) {
		$this->elements = $elements;
	}

	/**
	 * Add an element to the collection
	 * @param Mixed $element The element to be added
	 */
	public function add($element) {
		array_push($this->elements, $element);
	}

	/**
	 * Remove the last element from the collection
	 * @param Mixed $element The element to be added
	 */
	public function pop() {
		return array_pop($this->elements);
	}

	/**
	 * Count the number of elements that are
	 * in our collection
	 * @return
	 */
	public function count() : int {
		return count($this->elements);
	}

	public function current() {
		$current = $this->elements[$this->index];
		if($current) return $current;
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
		return isset($this->elements[$this->index]);
	}

}
