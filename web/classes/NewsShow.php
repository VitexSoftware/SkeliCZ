<?php
/**
 * Skeli.cz Site
 */

namespace SkeliCZ;

/**
 * Description of NewsShow
 *
 * @author vitex
 */
class NewsShow extends \Ease\Container
{
    
    function __construct($datasource)
    {
        parent::__construct();
        $news = $datasource->dblink->queryToArray('SELECT * FROM '.$datasource->getMyTable().' , user WHERE author = user.id',
            'id', 'id');
        foreach ($news as $article) {

            $articletext = $this->addItem(new \Ease\Html\Div(new \Ease\Html\H4Tag($article['title']),
                ['class' => 'smokeback']));
            $articletext->addItem(new \Ease\Html\Div($article['text']));
            $articletext->addItem(new \Ease\Html\Div('<hr><div style="text-align: right"><small>'.$article['login'].' '.strftime("%d/%m/%Y %H:%M:%S",
                    strtotime($article['DatCreate'])).'</small></div>'));
        }
    }
}