<?php
namespace SkeliCZ;

/**
 * Custom page bottom
 * 
 * @author Vitex <vitex@hippy.cz>
 * @copyright Vitex@hippy.cz (G) 2009,2010,2011,2012,2016
 */

class PageBottom extends \Ease\TWB\Container
{

    /**
     * Zobrazí přehled právě přihlášených a spodek stránky
     */
    public function finalize()
    {
        $this->SetTagID('footer');
        $this->addItem('<hr>');
        $footrow = new \Ease\TWB\Row();
        $footrow->addColumn(4, '<iframe src="https://ghbtns.com/github-btn.html?user=VitexSoftware&repo=SkeliCZ&type=star&count=true" frameborder="0" scrolling="0" width="170px" height="20px"></iframe>');
        
                $socialIcons = '
        <a class = "btn btn-primary social-login-btn social-facebook" href="https://www.facebook.com/Skeli-200396719984376/"><i class="fa fa-facebook"></i> Skeli</a>
        <a class = "btn btn-primary social-login-btn social-bandzone" href="http://bandzone.cz/mcskeli"><strong>Bz</strong> mcskeli</a>
        ';

        
        $footrow->addColumn(4, $socialIcons);
        $footrow->addColumn(4, '&copy; 2016 Radek "Skeli" Dvořák<br/> Powered by <a href="https://www.vitexsoftware.cz/ease.php">Ease Framework</a>');
        $this->addItem($footrow);
    }

}

