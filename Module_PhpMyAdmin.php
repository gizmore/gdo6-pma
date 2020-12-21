<?php
namespace GDO\PhpMyAdmin;

use GDO\Core\GDO_Module;
use GDO\DB\GDT_Checkbox;
use GDO\User\GDO_User;
use GDO\UI\GDT_Link;
use GDO\UI\GDT_Page;

/**
 * Wrap PhpMyAdmin installation.
 * 
 * @author gizmore
 * @version 6.10
 * @since 6.10
 */
final class Module_PhpMyAdmin extends GDO_Module
{
    public $module_priority = 80;
    
	public function href_pma() { return GWF_WEB_ROOT . 'GDO/PhpMyAdmin/phpmyadmin'; }

	public function thirdPartyFolders() { return ['/phpmyadmin/']; }
	
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
		return [
			GDT_Checkbox::make('pma_sidebar')->initial('0'),
		];
	}
	public function cfgSidebar() { return $this->getConfigValue('pma_sidebar'); }

	#############
	### Hooks ###
	#############
	public function onInitSidebar()
	{
		if ($this->cfgSidebar() && GDO_User::current()->isAdmin())
		{
		    $bar = GDT_Page::$INSTANCE->rightNav;
			$bar->addField(GDT_Link::make('link_pma')->href($this->href('Bridge')));
		}
	}

}
