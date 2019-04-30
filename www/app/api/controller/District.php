<?php
namespace app\api\controller;

use app\common\controller\Base;

class District extends Base
{
	public function getlist($fid=86)
	{
		return $this->get_district($fid);
	}
}