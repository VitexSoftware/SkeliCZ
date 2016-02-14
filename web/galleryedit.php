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

$oPage->onlyForAdmin();

$oPage->addItem(new PageTop(_('Editor')));

$gtabs = new \Ease\TWB\Tabs('Gtabs');

$gtabs->addTab(_('Gallery'));

$newPicForm = new \Ease\TWB\Form('NewPic');
$newPicForm->addInput(new \Ease\Html\InputTextTag('title'),_('Title'));
$newPicForm->addInput(new \Ease\Html\InputFileTag('picture'),_('Picture'));

$newPicForm->addInput(new \Ease\Html\InputTextTag('note'),_('Note'));

$gtabs->addTab(_('New Picture'), new \Ease\TWB\Panel(_('New Picture'), 'success',  $newPicForm));

$oPage->container->addItem(  $gtabs );

$oPage->addItem(new PageBottom());


$oPage->draw();

