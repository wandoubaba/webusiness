<?php
namespace app\index\controller;

use app\common\controller\Base;

class Index extends Base
{
    public function index()
    {
    	$this->view->assign('title','领象智能');
    	$this->view->assign('pagetitle','首页');
        return $this->view->fetch();
    }
}
