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


$oPage->addItem(new PageTop(_('MC Skeli\'s music')));



$oPage->container->addItem(new \Ease\Html\Div(
        new \Ease\Html\IframeTag('https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/193627955&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe><iframe width="100%" height="450" scrolling="no" frameborder="no" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/193627955&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true', [
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

