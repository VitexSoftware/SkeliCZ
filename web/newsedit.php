<?php
/**
 * SkeliCZ - Title page
 *
 * @package    SkeliCZ
 * @author     Vitex <vitex@hippy.cz>
 * @copyright  2009-2016 info@vitexsoftware.cz (G)
 */

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';

$oPage->onlyForAdmin();

$id = $oPage->getRequestValue('id', 'int');

$news = new News($id);

if ($oPage->isPosted()) {
    $news->takeData($_POST);
    if ($news->saveToSQL()) {
        $news->addStatusMessage(_('Article was saved'), 'success');
    } else {
        $news->addStatusMessage(_('Article was not saved'), 'warning');
    }
} else {
    $id = $oPage->getRequestValue('delete', 'int');
    if (!is_null($id)) {
        if ($news->deleteFromSQL($id)) {
            $news->addStatusMessage(_('Article was deleted'), 'success');
        } else {
            $news->addStatusMessage(_('Article was not deleted'), 'warning');
        }
    }
}



$oPage->addCss('body { background-image: url("images/skelilogo.jpg"); background-position: left top;  background-repeat: no-repeat; }');

$oPage->addItem(new PageTop(_('MC Skeli\'s news editor')));

$oPage->container->addItem(new NewsEditor($news));

$oPage->addItem(new PageBottom());

$oPage->draw();

