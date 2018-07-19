<?php
/**
 * @name TestController
 * @author win10-805172027\administrator
 * @desc 测试控制器
 * @see http://www.php.net/manual/en/class.yaf-controller-abstract.php
 */
class TestController extends Yaf_Controller_Abstract 
{
	public function indexAction() 
	{
		$msgs = (new MsgModel)->get('select * from msg');
		$this->getView()->assign('msgs', $msgs);	
		$this->getView()->render('test/index.phtml');
		
	}
}