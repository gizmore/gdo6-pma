<?php
namespace GDO\PhpMyAdmin\Method;

use GDO\Core\Method;
use GDO\PhpMyAdmin\Module_PhpMyAdmin;
use GDO\Core\GDT_Response;
use GDO\UI\GDT_Paragraph;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Panel;
use GDO\UI\GDT_Bar;

final class Bridge extends Method
{
	public function getPermission() { return 'admin'; }
	
	public function execute()
	{
		$url = Module_PhpMyAdmin::instance()->href_pma();
		$par = GDT_Panel::make()->html(t('pma_username_password', [GWF_DB_USER, GWF_DB_PASS]));
		$btn = GDT_Link::make('btn_launch_pma')->targetBlank()->href($url);
		return GDT_Response::makeWith($par, GDT_Bar::makeWith($btn)->horizontal());
	}

}
