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

$oPage->onlyForLogged();

if ($oPage->getRequestValue('user') == 'normal') {
    $oUser->setSettingValue('admin', FALSE);
    $oUser->addStatusMessage(_('Admin privileges was suppressed'));
}

switch ($oPage->getRequestValue('action')) {
    default:
        break;
}

$oPage->addItem(new PageTop(_('User Profile') . ' ' . $oUser->GetUserLogin()));



$settingsFrame = new \Ease\TWB\Panel(_('Settings'));
$settingsFrame->addItem(new \Ease\Html\ATag('https://secure.gravatar.com/', new \Ease\Html\ImgTag( $oUser->getIcon()), array('title' => 'Click to change avatar')));

//$settingsFrame->addItem(new IETextInputSaver('login', $oUser->getUserLogin(), _('přihlašovací jméno')));
$settingsFrame->addItem(new \Ease\TWB\LinkButton('changepassword.php', _('změna hesla')));

//$settingsFrame->addItem(new IETextInputSaver('email', $oUser->getUserEmail(), _('emailová adresa'), array('id' => 'UserMail')));

$settingsFrame->addItem('<br>');

$oPage->column2->addItem($settingsFrame);

if ((bool) $oUser->getSettingValue('admin')) {
    $oPage->column3->addItem(new \Ease\TWB\LinkButton('?user=normal', _('Suppress admin privileges'), 'danger'));
}

$oPage->addItem(new PageBottom());

$oPage->draw();
