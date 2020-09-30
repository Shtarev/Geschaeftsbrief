<?php
/**
* Creation of directory and file
* Serialize and unserialize for MySql here - is not involved
*/
class DataBank
{
	public $data = array();
	public $file = 'data/';
	
	function __construct($fileName){
		$dir = substr($fileName, 3, 7);
		if(!is_dir($this->file.$dir)){
			$result = mkdir($this->file.$dir, 0777, true);
			if($result){
				$this->file = $this->file.$dir.'/'.$fileName.'.pdf';
			}
			else{
				die('Directory nicht geschafft | Class: DataBank - __construct');
			}
		}
		else{
			$this->file = $this->file.$dir.'/'.$fileName.'.pdf';
		}
	}
	/* is not involved */
	public function inDataBank($array){
		$string = serialize($array);
		$DataBank = fopen($this->file, 'w');
		$result = fputs($DataBank, $string);
		if($result){
			return true;
		}
		else{
			return false;
		}
	}
	/* is not involved */
	public function fromDataBank(){
		if(file_exists($this->file)){
			$file = fopen($this->file, 'r');
			$string = fgets($file);
			$DataBank = unserialize($string);
			return $DataBank;
		}
		else{
			return false;
		}
	}
}
?>