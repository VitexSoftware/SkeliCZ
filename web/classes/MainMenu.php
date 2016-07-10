<?php

namespace SkeliCZ;

/**
 * Custom Main menu
 * 
 * @author Vitex <vitex@hippy.cz>
 * @copyright Vitex@hippy.cz (G) 2016
 */
class MainMenu extends \Ease\Html\Div {

    /**
     * Main Menu Object
     */
    function __construct() {
        parent::__construct(null, ['id' => 'MainMenu']);
    }

    /**
     * Menu including
     */
    function afterAdd() {
        $nav = $this->addItem(new BootstrapMenu());
        $user = \Ease\Shared::user();

        if ($user->getSettingValue('admin')) {
            $nav->addMenuItem(new \Ease\TWB\LinkButton('newsedit.php', '<i class="fa fa-pencil"></i> ' . _('Edit news')));
        }
        $nav->addMenuItem(new \Ease\Html\ATag('music.php', _('Music')));
        $nav->addMenuItem(new \Ease\Html\ATag('writeme.php', _('Write me')));
        $nav->addMenuItem(new \Ease\Html\ATag('video.php', _('Video')));
        $nav->addMenuItem(new \Ease\Html\ATag('gallery.php', _('Gallery')));
        if ($user->getSettingValue('admin')) {
            $nav->addMenuItem(new \Ease\TWB\LinkButton('galleryedit.php', '<i class="fa fa-pencil"></i> ' . _('Edit Gallery')));
        }
//        $nav->addMenuItem(new \Ease\Html\ATag('download.php', _('Download')));
        $nav->addMenuItem(new \Ease\Html\ATag('lyrics.php', _('Lyrics')));
        if ($user->getSettingValue('admin')) {
            $nav->addMenuItem(new \Ease\TWB\LinkButton('lyricsedit.php',
                '<i class="fa fa-pencil"></i> '._('Edit lyrics')));
        }
        $nav->addMenuItem(new \Ease\Html\ATag('contact.php', _('Contact')));
    }

    /**
     * Add status messages code
     */
    function finalize() {
        $this->addJavaScript('$("#StatusMessages").click(function(){ $("#StatusMessages").fadeTo("slow",0.25).slideUp("slow"); });', 3, TRUE);
        \Ease\JQuery\Part::jQueryze($this);
        $this->includeJavaScript('js/slideupmessages.js');
    }

}
