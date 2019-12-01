<?php
class gd {
	
	private $image;
	private $type;
	private $w,$h;
	
	function __construct($file){
		$this->type = $file[type];
		list($this->w,$this->h) = getimagesize($file[tmp_name]);
		
	    if ($this->type == "image/pjpeg" || 
			$this->type == "image/jpeg")
			  $this->image = imagecreatefromjpeg($file[tmp_name]) 
				or exit("Connot Initialize new image stream");
		elseif ($this->type == "image/gif")
			  $this->image = imagecreatefromgif($file[tmp_name]) 
				or exit("Connot Initialize new image stream");
		elseif ($this->type == "image/png" || 
				$this->type == "image/x-png")
			  $this->image = imagecreatefrompng($file[tmp_name]) 
				or exit("Connot Initialize new image stream");
	}
	
	function drawText($text,$x,$y){
	 $text_color = imagecolorallocate($this->image,0,0,0);
	 imagefttext($this->image,10,0,$x,$y,$text_color,"../include/LHANDW.ttf",$text);	
	}
	
	function resize($new_w,$new_h){
		$temp = imagecreatetruecolor($new_w,$new_h);
		imagecopyresized($temp,$this->image,0,0,0,0,$new_w,$new_h,$this->w,$this->h);
		$this->image = $temp;
	}
	
	function saveImage($imagePath){
	    if ($this->type == "image/pjpeg" || 
			$this->type == "image/jpeg"){
			  imagejpeg($this->image,"$imagePath");
			//  return "$imagePath";
		}elseif ($this->type == "image/gif"){
			  imagegif($this->image,"$imagePath");
			//  return "$imagePath.gif";
		}elseif ($this->type == "image/png" || 
				$this->type == "image/x-png"){
			  imagepng($this->image,"$imagePath");
			 // return "$imagePath";
		}
	}
	
	function __deconstruct(){
		@imagedestroy($this->image);
	}
}
?>