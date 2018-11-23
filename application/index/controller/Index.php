<?php
namespace app\index\controller;
use think\Db;

class Index
{
    public function index()
    {
        dump(123123);  
    	$dd=Db::execute("insert into tpcms_admin(name,pid) VALUES('张三',1)");
        dump($dd);
    }

    public function login(){
    	return view();
    }

    public function check(){
    	
    }
}
