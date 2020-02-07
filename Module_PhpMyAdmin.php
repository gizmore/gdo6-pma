<?php
namespace GDO\PhpMyAdmin;

use GDO\Core\GDO_Module;

final class Module_PhpMyAdmin extends GDO_Module
{
	public function href_administrate_module() { return href('PhpMyAdmin', 'Admin'); }
	
}
