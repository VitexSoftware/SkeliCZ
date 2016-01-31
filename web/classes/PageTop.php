<?php

namespace SkeliCZ;

/**
 * SkeliCZ Web page Top
 * 
 * @author Vitex <vitex@hippy.cz>
 * @copyright Vitex@hippy.cz (G) 2016
 */

/**
 * Vršek stránky
 */
class PageTop extends \Ease\Page {

    /**
     * Titulek stránky
     * @var type 
     */
    public $pageHeading = 'Page Heading';

    /**
     * Nastavuje titulek
     * 
     * @param string $PageHeading
     */
    function __construct($pageHeadeing = NULL) {
        $this->pageHeading = $pageHeadeing;
        parent::__construct();
    }

    /**
     * Set page title in webpage
     */
    function afterAdd(){
        $this->webPage->setPageTitle($this->pageHeading);
    }
    
    /**
     * Vloží vršek stránky a hlavní menu
     */
    function finalize() {
        $this->addItem(new MainMenu());
    }

}
