<?php

namespace app\bootstrap\classes;


class config{
	public static function get($path=null){
		if($path){
			$config=$GLOBALS['config'];
			$path= explode ('/', $path);
			
			foreach ($path as $bit) {
				if(isset($config[$bit])){
					$config=$config[$bit];
				}
			}
			//print_r($path);
			return $config;
		}

	return false;
	}
}
