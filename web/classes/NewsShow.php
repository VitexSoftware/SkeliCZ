<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SkeliCZ;

/**
 * Description of NewsShow
 *
 * @author vitex
 */
class NewsShow extends \Ease\Container
{

    function __construct()
    {
        parent::__construct();
        $newser = new News;
        $news   = $newser->getAllFromSQL(null, null, null, 'id DESC', 'id');
        foreach ($news as $article) {

            $articletext = $this->addItem(new \Ease\Html\Div(new \Ease\Html\H4Tag($article['title']),
                ['class' => 'smokeback']));
            $articletext->addItem(new \Ease\Html\Div($article['text']));
            $articletext->addItem(new \Ease\Html\Div('<hr><div style="text-align: right"><small>'.strftime("%d/%m/%Y %H:%M:%S",
                    strtotime($article['DatCreate'])).'</small></div>'));
        }
    }
}