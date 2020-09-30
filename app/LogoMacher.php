<?php
/**
* We do Logo NETZEXPLORER
*/

class LogoMacher
{
	public $logo = 'images/logo.png';
	
	function __construct(){
		//
	}
	
	public function Logo(){
		$img = imagecreate(320, 75);
		imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
		$dimgray = imagecolorallocate($img, 105, 105, 105);
		$black = imagecolorallocate($img, 0, 0, 0);
		$coral = imagecolorallocate($img, 255, 127, 0);
		// земной шар
		imagefilledellipse ($img, 37.5, 37.5,  75, 75, imagecolorallocate($img, 100, 149, 237));
		imagearc ($img, 37.5, 37.5, 75, 36, 0, 180, $white);
		imagearc ($img, 37.5, 37.5, 36, 75, 90, 270, $white);
		putenv('GDFONTHPATH='.realpath('.'));
		imagettftext($img, 24, 0, 5, 47, $black, $_SERVER['DOCUMENT_ROOT'].'/fonts/BankGothic-Regular.ttf', 'NETZEXPLORER');
		imagettftext($img, 12, 0, 276, 47, $black, $_SERVER['DOCUMENT_ROOT'].'/fonts/BankGothic-Regular.ttf', '.COM');
		imagettftext($img, 24, 0, 72, 47, $coral, $_SERVER['DOCUMENT_ROOT'].'/fonts/BankGothic-Regular.ttf', 'Z');
		imagettftext($img, 10, 0, 183, 60, $dimgray, $_SERVER['DOCUMENT_ROOT'].'/fonts/Brushsci.ttf', 'Web Design Erstellen');
		imagepng($img, $this->logo);
	}
	
	public function NoLogo(){
		$img = imagecreate(320, 75);
		imagefill($img, 0, 0, imagecolorallocate($img, 255, 255, 255));
		imagepng($img, $this->logo);
	}
	
	public function LogoKill(){
		unlink($this->logo);
	}
}
?>