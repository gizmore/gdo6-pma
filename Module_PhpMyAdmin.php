<?php
namespace GDO\PhpMyAdmin;

use GDO\Core\GDO_Module;
use GDO\DB\GDT_Checkbox;
use GDO\User\GDO_User;
use GDO\UI\GDT_Bar;
use GDO\UI\GDT_Link;

/**
 * Wrap PhpMyAdmin installation.
 * 
 * @author gizmore
 * @since 6.10
 * @version 6.10
 */
final class Module_PhpMyAdmin extends GDO_Module
{
	public function href_pma() { return GWF_WEB_ROOT . 'GDO/PhpMyAdmin/phpmyadmin'; }

	##############
	### Module ###
	##############
	public function onLoadLanguage() { return $this->loadLanguage('lang/pma'); }
	public function href_administrate_module() { return $this->href('Admin'); }
	
	##############
	### Config ###
	##############
	public function getConfig()
	{
		return array(
			GDT_Checkbox::make('pma_sidebar')->initial('0'),
		);
	}
	public function cfgSidebar() { return $this->getConfigValue('pma_sidebar'); }

	#############
	### Hooks ###
	#############
	public function hookRightBar(GDT_Bar $bar)
	{
		if ($this->cfgSidebar() && GDO_User::current()->isAdmin())
		{
			$bar->addField(GDT_Link::make('link_pma')->href($this->href('Bridge')));
		}
	}

}
