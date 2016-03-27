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

$newscolumn->addItem(new NewsShow());



/*
Zdravím lidičky :]

Jmenuji se Radek Dvořák, narozený 29.1.1992 v Podbořanech.

Trvale bydlím na severu Plzeňska v malé obci Žihle kde jsou jen korozí napadený vydle xD... Vyučil jsem se v Podbořanech jako instalatér a tímto povoláním se také živim.

Mým koníčkem se už kolemroku 2010 stal hip hop ve všech směrech jak ho známe.
Nejdříve jsem začal kreslit graffity, a rok poté i beatbox. Až jsem se nakonec dospěl až k rapu který jako jediný dělam dodnes, coz je přiblize 8 let od prvního textu co sem napsal (raději ho ani nikde nevyhledavejte je to děs xD )


Hi folks:]
My name is Radek Dvorak, born 29 January 1992 in Podbořany.

Permanently live in the north of Pilsen in a small village Žihle ... I was trained in Podbořany as a plumber by profession I do today.
My hobby was from 2010 the hip-hop in all directions as we know it.

First, I started to draw graffiti, and the year after and beatbox. Until I finally came to a rap which alone do today, which would bring them closer to 8 years from the first text that I wrote (even better Never look it's terror xD)

 */



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

