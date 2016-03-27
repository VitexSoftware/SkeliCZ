<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SkeliCZ;

/**
 * Description of NewsEditor
 *
 * @author vitex
 */
class NewsEditor extends \Ease\Html\Div
{
    /**
     * News 
     * @var News 
     */
    public $newsEngine = null;

    /**
     * Articles
     *
     * @param News $news
     */
    public function __construct($news)
    {
        parent::__construct();
        $this->newsEngine = $news;
    }

    public function articleListing()
    {
        $articles = $this->newsEngine->getColumnsFromSQL('*', null, 'id', 'id');
        $list     = new \Ease\Html\OlTag();
        foreach ($articles as $articleID => $article) {

            $listRow = new \Ease\Html\Span();

            $listRow->addItem(
                new \Ease\Html\ATag('?id='.$articleID, $article['title']));


            $listRow->addItem('&nbsp;(');

            $listRow->addItem(
                new \Ease\JQuery\ConfirmedLinkButton('?delete='.$articleID,
                _('Delete')));

            $listRow->addItem(')');


            $list->addItemSmart($listRow);
        }
        return $list;
    }

    public function finalize()
    {
        $row = new \Ease\TWB\Row();
        $row->addColumn(6, $this->articleForm());
        $row->addColumn(6, $this->articleListing());
        $this->addItem($row);
    }

    public function articleForm()
    {
        $form = new \Ease\TWB\Form('NewsArticle');
        $form->addItem(new \Ease\Html\InputHiddenTag('id',
            $this->newsEngine->getMyKey()));
        $form->addInput(new \Ease\Html\InputTextTag('title'), _('Name'));
        $form->addInput(new WISWYG('text'), _('Text'));
        $form->addInput(new \Ease\Html\Select('language',
            [ 'cs' => _('Czech'), 'en' => _('English')]), _('Language'));
        $form->addItem(new \Ease\TWB\SubmitButton('Ok', 'success'));
        $form->fillUp($this->newsEngine->getData());
        return $form;
    }
}