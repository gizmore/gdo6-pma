<?php
use GDO\UI\GDT_Dashboard;
use GDO\UI\GDT_Button;

$dash = GDT_Dashboard::make()->addFields(array(
	GDT_Button::make('link_pma')->href(href('PhpMyAdmin', 'Bridge')),
));

echo $dash->render();
