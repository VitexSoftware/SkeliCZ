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


$oPage->column1->addItem(new \Ease\Html\H1Tag(_('Mc Skeli')));
$oPage->column1->addItem(new \Ease\Html\H2Tag(_('Radek Dvořák')));

$address = $oPage->column3->addItem(new \Ease\Html\UlTag());

$address->addItemSmart(new \Ease\Html\ATag('mailto:mc@skeli.cz', 'mc@skeli.cz'));
$address->addItemSmart(new \Ease\Html\ATag('callto:+420723450204', '(+420) 723 450 204'));

$address->addItemSmart('Žihle 358');
$address->addItemSmart('331 65');

$oPage->column2->addItem(new \Ease\Html\ImgTag('images/skelilogo.png', 'Skeli'));

$oPage->addItem(new PageBottom());


$oPage->draw();

