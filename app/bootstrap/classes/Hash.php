<?php

namespace app\bootstrap\classes;

class Hash{
	public static function make($string, $options, $salt =''){
		return password_hash($string . $salt, PASSWORD_BCRYPT, $options);
	}
	public static function salt($length){
	    return mcrypt_create_iv($length);
	}
	public static function unique(){
		return self::make(uniqid());
	}

}
