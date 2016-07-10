<?php
/**
 * SkeliCZ - Login page
 *
 * @package    SkeliCZ
 * @author     Vitex <vitex@hippy.cz>
 * @copyright  2009-2016 info@vitexsoftware.cz (G)
 */

namespace SkeliCZ;

require_once 'includes/SkeliInit.php';

$oPage->addCss('body { background-image: url("images/skelilogo.jpg"); background-position: left top;  background-repeat: no-repeat; }');
$oPage->addItem(new PageTop(_('Messages for skeli')));

$indexrow   = new \Ease\TWB\Row();
$indexrow->addColumn(2);
$messageBoardcolumn = $indexrow->addColumn(4,
    new \Ease\Html\H1Tag(_('Messages')));

$messageBoard = new MessageBoard();

$messageBoardcolumn->addItem(new NewsShow($messageBoard));

$formColumn = $indexrow->addColumn(6, new \Ease\Html\H1Tag(_('Write message')));

if ($oUser->getUserID()) {

    $id = $oPage->getRequestValue('id', 'int');

    if ($id) {
        $messageBoard->loadFromSQL($id);
    }
    if ($oPage->isPosted()) {
        $messageBoard->takeData($_POST);
        $messageBoard->setDataValue('author', $oUser->getUserID());
        if ($messageBoard->saveToSQL()) {
            $messageBoard->addStatusMessage(_('Message was saved'), 'success');
        } else {
            $messageBoard->addStatusMessage(_('Message was not saved'),
                'warning');
        }
    } else {
        $id = $oPage->getRequestValue('delete', 'int');
        if (!is_null($id)) {
            if ($messageBoard->deleteFromSQL($id)) {
                $messageBoard->addStatusMessage(_('Message was deleted'),
                    'success');
            } else {
                $messageBoard->addStatusMessage(_('Message was not deleted'),
                    'warning');
            }
        }
    }



    $formColumn->addItem(new NewsEditor($messageBoard));
} else {
    $formColumn->addItem(new \Ease\TWB\LinkButton('login.php',
        _('Please Login to write messages'), 'warning'));
}

$oPage->container->addItem($indexrow);

$oPage->addItem(new PageBottom());

$oPage->draw();
