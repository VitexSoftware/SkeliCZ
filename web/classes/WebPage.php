<?php

namespace SkeliCZ;

/**
 * Custom Twitter Bootstrap based webpage class
 *
 * @author Vitex <vitex@hippy.cz>
 * @copyright Vitex@hippy.cz (G) 2009,2010,2011,2012,2016
 */
class WebPage extends \Ease\TWB\WebPage {

    /**
     * CSSKo bootstrapu
     * @var string url
     */
    public $mainStyle = './css/bootstrap.min.css';

    /**
     * Page main continer
     * @var TWB\Contaner
     */
    public $container = NULL;

    /**
     * First column
     * @var TWB\Col
     */
    public $column1 = NULL;

    /**
     * Second column
     * @var TWB\Col
     */
    public $column2 = NULL;

    /**
     * Third column
     * @var TWB\Col
     */
    public $column3 = NULL;

    /**
     * Basic Custom Twitter Bootstrap based webpage class
     *
     * @param string $pageTitle
     */
    function __construct($pageTitle = null) {
        parent::__construct($pageTitle);

//        $this->includeCss('css/main.css');
        $this->head->addItem('<link rel="apple-touch-icon-precomposed" href="images/skelilogo.png">');
        $this->head->addItem('<link rel="shortcut icon"  type="image/png" href="images/skelilogo.png">');
        $this->head->addItem('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
        $this->addCss('body {
                padding-top: 60px;
                padding-bottom: 40px;
            }');
        $this->addItem('<br>');
        $this->includeCss('css/main.css');
        $this->includeCss('css/font-awesome.min.css');
        $this->includeJavaScript('js/youtube.js');
        $this->container = $this->addItem(new \Ease\TWB\Container);

        $this->heroUnit = $this->container->addItem(new \Ease\Html\Div(null, ['class' => 'hero-unit']));

        $row = $this->container->addItem(new \Ease\TWB\Row);

        $this->column1 = $row->addColumn(4);
        $this->column2 = $row->addColumn(4);
        $this->column3 = $row->addColumn(4);
    }

    /**
     * Only Admin can continue
     */
    function onlyForAdmin() {
        if (!\Ease\Shared::user()->getSettingValue('admin')) {
            $this->addStatusMessage(_('Only for admin'), 'warning');
            $this->redirect('login.php');
            exit();
        }
    }

}
