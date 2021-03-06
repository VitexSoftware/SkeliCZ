<?php

namespace SkeliCZ;

/**
 * Custom Twitter Bootstrap based 4 columns form
 *
 * @author Vitex <vitex@hippy.cz>
 * @copyright Vitex@hippy.cz (G) 2009,2010,2011,2012,2016
 */

class ColumnsForm extends \Ease\TWB\Form {

    /**
     * Šířka sloupce.
     *
     * @var int
     */
    public $colsize = 4;

    /**
     * Řádek.
     *
     * @var \Ease\TWB\Row
     */
    public $row = null;

    /**
     * Počet položek na řádek.
     *
     * @var int
     */
    public $itemsPerRow = 4;

    /**
     *
     * @var SysEngine
     */
    public $engine = null;

    /**
     * Odesílací tlačítka
     * @var \Ease\Html\Div
     */
    public $savers = null;

    /**
     * Formulář Bootstrapu.
     *
     * @param SysEngine $engine     jméno formuláře
     * @param mixed  $formContents  prvky uvnitř formuláře
     * @param array  $tagProperties vlastnosti tagu například:
     *                              array('enctype' => 'multipart/form-data')
     */
    public function __construct($engine, $formContents = null, $tagProperties = null) {
        $this->engine = $engine;
        parent::__construct(
                get_class($engine), '', 'POST', $formContents, $tagProperties
        );
        $this->newRow();
        $this->savers = new \Ease\Html\Div(null, ['style' => 'text-align: right']);
    }

    /**
     * Přidá další řadu formuláře
     *
     * @return \Ease\TWB\Row Nově vložený řádek formuláře
     */
    function newRow() {
        return $this->row = $this->addItem(new \Ease\TWB\Row());
    }

    /**
     * Vloží prvek do sloupce formuláře.
     *
     * @param mixed  $input       Vstupní prvek
     * @param string $caption     Popisek
     * @param string $placeholder předvysvětlující text
     * @param string $helptext    Dodatečná nápověda
     * @param string $addTagClass CSS třída kterou má být oskiován vložený prvek
     */
    public function addInput($input, $caption = null, $placeholder = null, $helptext = null, $addTagClass = 'form-control') {
        if ($this->row->getItemsCount() > $this->itemsPerRow) {
            $this->row = $this->addItem(new \Ease\TWB\Row());
        }

        return $this->row->addItem(new \Ease\TWB\Col($this->colsize, new \Ease\TWB\FormGroup($caption, $input, $placeholder, $helptext, $addTagClass)));
    }

    /**
     * Přidá do formuláře tlačítko "Uložit"
     */
    function addSubmitSave() {
        $this->savers->addItem(new EaseTWSubmitButton(_('Uložit'), 'default'), ['style' => 'text-align: right']);
    }

    /**
     * Přidá do formuláře tlačítko "Uložit a zpět na přehled"
     */
    function addSubmitSaveAndList() {
        $this->savers->addItem(new \Ease\Html\InputSubmitTag('gotolist', _('Uložit a zpět na přehled'), ['class' => 'btn btn-info']));
    }

    /**
     * Přidá do formuláře tlačítko "Uložit a další"
     */
    function addSubmitSaveAndNext() {
        $this->savers->addItem(new \Ease\Html\InputSubmitTag('gotonew', _('Uložit a další'), ['class' => 'btn btn-success']));
    }

    /**
     * Vyplní formulář
     *
     * @param SysEngine $datasource
     */
    function populate($datasource) {
        $recordID = $datasource->getMyKey();

        foreach ($datasource->keywordsInfo as $col_name => $col_info) {
            if (isset($datasource->myLastModifiedColumn) && ($datasource->myLastModifiedColumn == $col_name)) {
                continue;
            }
            if (isset($datasource->myCreateColumn) && ($datasource->myCreateColumn == $col_name)) {
                continue;
            }
            $placeholder = $helptext = '';
            $value = $datasource->getDataValue($col_name);
            if (isset($col_info['title'])) {
                $caption = $col_info['title'];
            } else {
                $caption = $col_name;
            }
            if (isset($datasource->useKeywords[$col_name])) {
                $type = preg_replace('/[^A-Z]+/', '', $datasource->useKeywords[$col_name]);
            } else {
                $type = 'text';
            }

            switch ($type) {
                case 'BOOL':
                    $input_widget = new YesNoSwitch($col_name, $value);
                    break;
                case 'INT':
                    $input_widget = new SpinBox($col_name, $value);
                    break;
                case 'DATE':
                    $input_widget = new DatePicker($col_name, $value);
                    break;
                case 'TEXT':
                    $input_widget = new \Ease\Html\TextareaTag($col_name, $value, ['class' => 'form-control']);
                    break;
                case 'STRING':
                    $input_widget = new \Ease\Html\InputTag($col_name, $value, ['class' => 'form-control']);
                default:
                    break;
            }

            $this->addInput($input_widget, $caption, $placeholder, $helptext);
        }
    }

    function finalize() {
        $recordID = $this->engine->getMyKey();
        $this->addItem(new \Ease\Html\InputHiddenTag('class', get_class($this->engine)));
        if (!is_null($recordID)) {
            $this->addItem(new \Ease\Html\InputHiddenTag($this->engine->myKeyColumn, $recordID));
        }
        $this->addItem($this->savers);
        \Ease\Shared::webPage()->includeJavaScript('js/jquery.validate.js');
        \Ease\Shared::webPage()->includeJavaScript('js/messages_cs.js');
        return parent::finalize();
    }

}
