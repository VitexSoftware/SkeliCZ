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

$oPage->addCss('body { background-image: url("images/skelilbackmic.png"); background-position: left top;  background-repeat: no-repeat; }');

$oPage->addItem(new PageTop(_('MC Skeli')));

$indexrow = new \Ease\TWB\Row();
$newscolumn = $indexrow->addColumn(6, new \Ease\Html\H1Tag(_('News')));

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

$oPage->addItem(new PageBottom());


$oPage->draw();

