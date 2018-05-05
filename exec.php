<?php
	class file_exec{
		public $cmd;
		public $output;
		function file_exec($locate_file,$output_name){
			$this->output = $output_name.'.out';
			$this->cmd = "g++ $locate_file -o $this->output"; 
			sleep(2);

		}
		function complie_error($check){
			for ($i = 0; $i < count($check) - 1; $i++) {
				$pos = strpos($check[$i], 'error');
				if ($pos > 0) {
					return false;
				}
			}
			return true;
		}
		function make_exec(){
			$arr = array();
			$check = array();
			exec($this->cmd,$check);
			if ($this->complie_error($check)){
				exec("./$this->output",$arr);
			}
			return $arr;
			
		}

	}

?>