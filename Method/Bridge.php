<?php
namespace GDO\PhpMyAdmin\Method;

use GDO\Core\Method;
use GDO\Core\Website;
use GDO\PhpMyAdmin\Module_PhpMyAdmin;

final class Bridge extends Method
{
	public function getPermission() { return 'admin'; }
	
	public function execute()
	{
		$url = Module_PhpMyAdmin::instance()->href_pma();
		return Website::redirect($url);
	}
}
