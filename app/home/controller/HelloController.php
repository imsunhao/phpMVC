<?php 
namespace home\controller;

use core\traits\Jump;
use core\Controller;
/**
* hello
*/
class HelloController extends Controller
{
	public function hello()
	{
		$this->assign('name','sunhao');
		$this->display();
	}

}