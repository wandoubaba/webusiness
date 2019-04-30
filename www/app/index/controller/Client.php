<?php
namespace app\index\controller;

use app\common\controller\Base;

class Client extends Base
{
    public function index()
    {
    	$this->view->assign('pagetitle','客户');
        return $this->view->fetch();
    }

    public function newclient()
    {
    	return $this->view->fetch();
    }

    public function show()
    {
        $this->view->assign('pagetitle','客户详情');
        return $this->view->fetch();
    }

    public function newfollow()
    {
        return $this->view->fetch();
    }
}
