<?php
namespace SkeliCZ;

/**
 * Custom Main menu
 * 
 * @author Vitex <vitex@hippy.cz>
 * @copyright Vitex@hippy.cz (G) 2016
 */

class MainMenu extends \Ease\Html\Div
{

    /**
     * Main Menu Object
     */
    function __construct()
    {
        parent::__construct(null,['id'=>'MainMenu']);
    }

    /**
     * Menu including
     */
    function afterAdd()
    {
        $nav = $this->addItem(new BootstrapMenu());

        $nav->addMenuItem(new \Ease\Html\ATag('music.php', _('Music')));
        $nav->addMenuItem(new \Ease\Html\ATag('video.php', _('Video')));
        $nav->addMenuItem(new \Ease\Html\ATag('gallery.php', _('Gallery')));
        $nav->addMenuItem(new \Ease\Html\ATag('lyrics.php', _('Lyrics')));
        $nav->addMenuItem(new \Ease\Html\ATag('contact.php', _('Contact')));
    }

    /**
     * Add status messages code
     */
    function finalize()
    {
        $this->addJavaScript('$("#StatusMessages").click(function(){ $("#StatusMessages").fadeTo("slow",0.25).slideUp("slow"); });', 3, TRUE);
        \Ease\JQuery\Part::jQueryze($this);
        $this->includeJavaScript('js/slideupmessages.js');
    }

}

