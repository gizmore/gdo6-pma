<?php
namespace GDO\PhpMyAdmin\Method;

use GDO\Core\Method;
use GDO\PhpMyAdmin\Module_PhpMyAdmin;
use GDO\Core\GDT_Response;
use GDO\UI\GDT_Paragraph;
use GDO\UI\GDT_Link;

final class Bridge extends Method
{
	public function getPermission() { return 'admin'; }
	
	public function execute()
	{
		$url = Module_PhpMyAdmin::instance()->href_pma();
		$par = GDT_Paragraph::make()->html(t('pma_username_password', [GWF_DB_USER, GWF_DB_PASS]));
		$btn = GDT_Link::make('btn_launch_pma')->targetBlank()->href($url);
		return GDT_Response::makeWith($par, $btn);
	}

}
