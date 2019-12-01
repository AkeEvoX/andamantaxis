<?php
/*logging for tracking 
type : info , debug , error ,warning 
*/
	//declare for dynamic root path
	$log_path = "../"; 

	function log_info($msg)
	{
		global $log_path ;
		$msg = " [INFO] " . $msg;
		$filename = "logs/info_".date('Y-m-d').".log";
		log_file($msg,$filename);
	}

	function log_debug($msg)
	{
		$msg = " [DEBUG] " . $msg;
		$filename =  "logs/debug_".date('Y-m-d').".log";
		log_file($msg,$filename);
	}

	function log_error($msg)
	{
		$msg =" [ERROR] " . $msg;
		$filename = "logs/error_".date('Y-m-d').".log";
		log_file($msg,$filename);
	}

	function log_warning($msg)
	{
		$msg = " [WARN] " . $msg;
		$filename = "logs/warning_".date('Y-m-d').".log";
		log_file($msg,$filename);
		
	}

	function log_file($msg,$filename)
	{
		global $log_path ;
		$filename = $log_path . $filename;
		
		$msg  =  date('Y-m-d H:i:s') . $msg ;
		checkdir($filename);
		file_put_contents($filename,$msg."\n",FILE_USE_INCLUDE_PATH | FILE_APPEND);
	}

	function set_log_path($path){
		global $log_path;
		$log_path = $path;
	}
	
	function checkdir($filename)
	{
		$parts = explode('/', $filename);
        $file = array_pop($parts);
        $dir = '';
		
        foreach($parts as $part)
		{
			
			if($part=="..")
				$dir="..";
			else if($dir=="")
				$dir = $part;
			else
				$dir .= "/$part";
		
			$checkDir = $dir;
			if(!is_dir($checkDir)) 
			{
				echo $checkDir;
				mkdir($checkDir,0777,true);
			}
		}
	}
?>