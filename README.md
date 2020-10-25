# gdo6-phpmyadmin
This module clones the latest STABLE PhpMyAdmin and does a bridge between GDO and PMA.
Be warned, the git clone of PMA is quite large.

## Install
- Install gdo6 module

    cd gdo6/GDO
    git clone --recursive https://github.com/gizmore/gdo6-pma PhpMyAdmin
    
- [Install PMA](https://docs.phpmyadmin.net/en/latest/setup.html#installing-from-git)

Boils down to
   
	cd PhpMyAdmin/phpmyadmin
	composer update --no-dev
    yarn install --production

### Usage
Goto Admin->PhpMyAdmin->Admin->PMA

### Configuration
- pma_sidebar; boolean: Show PhpMyAdmin button in right sidebar
