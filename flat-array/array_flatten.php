<?php

class ArrayFlatten {

	private $input_array;
	private $output_array;
	
	public function __construct()
	{
		$this->input_array = array();
		$this->output_array = array();
	}
	
	public function setArray($array)
	{
		$this->input_array = $array;
	}
	
	public function getArray()
	{
		return $this->output_array;
	}
	
	public function flatArray()
	{
		if (!is_array($this->input_array)) {
			return FALSE;
		}
		foreach ($this->input_array as $key => $value) {
			if (is_array($value)) {
                $this->flatInnerArray($value);
			}
			else {
                $this->output_array[] = $value;
			}
		}
	}
	
	private function flatInnerArray($array){
		if (!is_array($array)) {
			return FALSE;
		}
		foreach ($array as $key => $value) {
			if (is_array($value)) {
				$this->flatInnerArray($value);
			}
			else {
				$this->output_array[] = $value;
			}
		}
    }
}
