<?php
namespace GDO\PhpMyAdmin\Method;

use GDO\Core\Method;

final class Bridge extends Method
{
	public function getPermission() { return 'admin'; }
	
	public function execute()
	{
	}
}
