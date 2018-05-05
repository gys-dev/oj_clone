<?php

class file {
	public $file_name;
	function file($name){
		$this->file_name = 'upload/'.$name;
		
	}

	function xuli(){
		$input_insert = "int main(){\nfreopen(\"result/input.txt\",\"r\",stdin);"; 
		$content = file_get_contents($this->file_name);
		
		//$content = file_get_contents("http://localhost/oj_clone/problem//upload/input.cpp");
		$content_new =  str_replace('int main(){', $input_insert, $content);
		file_put_contents($this->file_name, $content_new);
	}
}