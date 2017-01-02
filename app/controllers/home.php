<?php

namespace app\controllers;

use app\core\Controller;

class Home extends Controller{
	public function index($name=''){
		$user=$this->model('User');
		$user->name=$name;

		$this->view('home/index',['name'=>$user->name]);
	}
	public static function roll(){
		echo 'I\'m using name';
	}
}
