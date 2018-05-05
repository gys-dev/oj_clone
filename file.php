<?php

class file {
	public $file_name;
	function file($name){
		$this->$file_name = '/upload/'.$name;
	}

	function xuli(){
		$input_insert = "int main(){freopen(\"/result/input.txt\",\"r\",\"stdin\");"; 
		$content = file_get_contents($this->$file_name);
		echo str_replace('int main(){', $input_insert, $content);

	}
}