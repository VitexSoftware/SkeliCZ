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


$oPage->addItem(new PageTop(_('MC Skeli')));

$oPage->container->addItem(new \Ease\Html\H1Tag(_('News')));


$oPage->container->addItem(new \Ease\Html\Div(
        new \Ease\Html\IframeTag('https://www.youtube.com/embed/auNofZzBIFA' 
        , [
    'width' => "540",
    'height' => "380",
    'frameborder' => "0",
    'allowfullscreen'=>true,
    'showinfo' => 1,
        ]
        ),['style'=>'text-align: center;','class'=>'videoWrapper'])
);

$oPage->addItem(new PageBottom());


$oPage->draw();
