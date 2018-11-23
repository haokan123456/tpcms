<?php

namespace app\admin\controller;
use think\Db;

class Index{

	public function login(){
		return view();
	}

	public function denglu(){
		$user=input('post.');
		dump($user);
	}
}