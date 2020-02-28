<?php
namespace GDO\PhpMyAdmin\Method;

use GDO\UI\MethodPage;

final class Admin extends MethodPage
{
	public function getPermission() { return 'admin'; }
}
