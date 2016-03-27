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

$oPage->addItem(new PageTop(_('MC Skeli\'s videos')));

$oPage->container->addItem(new \Ease\Html\Div(
        new \Ease\Html\IframeTag('https://www.youtube.com/embed/videoseries' .
        '?list=PL7LfTp0728NglwZbzIGldRfoLX5QWsAFS', [
    'width' => "760",
    'height' => "515",
    'frameborder' => "0",
    'allowfullscreen'=>true,
    'showinfo' => 1,
           
        ]
        ),['style'=>'text-align: center;','class'=>'videoWrapper'])
);

$oPage->addItem(new PageBottom());


$oPage->draw();

