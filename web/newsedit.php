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

$oPage->addCss('body { background-image: url("images/skelilbackmic.png"); background-position: left top;  background-repeat: no-repeat; }');

$oPage->addItem(new PageTop(_('MC Skeli\'s news ')));

$indexrow = new \Ease\TWB\Row();
$indexrow->addColumn(2);
$newscolumn = $indexrow->addColumn(4, new \Ease\Html\H1Tag(_('News')));

$welcometext = $newscolumn->addItem(new \Ease\Html\Div(_('Welcome on my new website!'),['class'=>'smokeback']));
$welcometext->addItem( new \Ease\Html\Div( _('For ten years I have been a rap music.')));

$videocolumn = $indexrow->addColumn(6, new \Ease\Html\Div(
        new \Ease\Html\IframeTag('https://www.youtube.com/embed/auNofZzBIFA'
        , [
    'width' => "540",
    'height' => "380",
    'frameborder' => "0",
    'allowfullscreen' => true,
    'showinfo' => 1,
        ]
        ), ['style' => 'text-align: center;', 'class' => 'videoWrapper'])
);

$oPage->container->addItem($indexrow);

$caution = new \Ease\TWB\Well();
$caution->addItem(_('You are enter to page with marihuana content. By clicking to "OK" you agree that:'));
        
$agreepoints = new \Ease\Html\OlTag();
$agreepoints->addItemSmart(') '._('I am 18 or older'));
$agreepoints->addItemSmart(') '._('I am already ganja smoker'));
$agreepoints->addItemSmart(') '._('I will not browse this page on public'));
$agreepoints->addItemSmart(') '._('I am familiar with HipHop & Cookies as EU wants'));
$agreepoints->addItemSmart(') '._('I am not provide this page content to underage person'));

$caution->addItem($agreepoints);

$caution->addItem(_('If you do not meet any of the above conditions, please leave this site!'));

if(!isset($_SESSION['noticed'])){
    $_SESSION['noticed'] = true;
    $oPage->addItem( new \Ease\TWB\Modal('caution',_('Caution!'),$caution,['show'=>true]) );
    $oPage->addJavaScript('$("#cautionok").attr("data-dismiss","modal");');
}


$oPage->addItem(new PageBottom());


$oPage->draw();

