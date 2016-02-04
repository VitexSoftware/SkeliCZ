<?php

/**
 * SkeliCZ - Enter new addrese into database
 *
 * @package    SkeliCZ
 * @author     Vitex <vitex@hippy.cz>
 * @copyright  2009-2016 info@vitexsoftware.cz (G)
 */

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';


$oPage->addItem(new PageTop(_('MC Skeli\'s contacts')));

$oPage->container->addItem('Kontakty atd ...');

$oPage->addItem(new PageBottom());


$oPage->draw();

