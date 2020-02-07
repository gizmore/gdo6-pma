<?php
use GDO\UI\GDT_Dashboard;
use GDO\UI\GDT_Button;
use GDO\PhpMyAdmin\Module_PhpMyAdmin;

$dash = GDT_Dashboard::make();

$hrefPMA = Module_PhpMyAdmin::instance()->href_pma();

$dash->addFields(array(
	GDT_Button::make('link_phpmyadmin')->href($hrefPMA),
));

echo $dash->render();
