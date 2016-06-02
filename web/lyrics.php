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


$oPage->addItem(new PageTop(_('MC Skeli\'s lyrics')));

$oPage->addCss('body { background-image: url("images/skelilbackstudio.png"); background-position: left top;  background-repeat: no-repeat; }');


$lyricser = new Lyrics;


$lyrics = new \Ease\TWB\Row();

$lyrics->addColumn(2);

foreach ($lyricser->getAllFromSQL() as $songtext) {
    $articletext = new \Ease\Html\Div(new \Ease\Html\H4Tag($songtext['name']));
    $articletext->addItem(new \Ease\Html\Div($songtext['text']));

    $lyrics->addColumn(4, $articletext)->addTagClass('smokeback');
}


$oPage->container->addItem($lyrics);

$oPage->addItem(new PageBottom());


$oPage->draw();

