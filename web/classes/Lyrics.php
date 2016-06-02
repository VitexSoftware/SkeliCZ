<?php


namespace SkeliCZ;

/**
 * Description of Lyrics
 *
 * @author vitex
 */
class Lyrics extends \Ease\Brick
{
    public $myKeyColumn = 'id';
    public $myTable     = 'lyrics';

    /**
     * Sloupeček obsahující datum vložení záznamu do shopu
     * @var string
     */
    public $myCreateColumn = null;

    /**
     * Slopecek obsahujici datum poslení modifikace záznamu do shopu
     * @var string
     */
    public $myLastModifiedColumn = null;

    /**
     * News Article
     */
    public function __construct($id = null)
    {
        parent::__construct();
        if (!is_null($id)) {
            $this->loadFromSQL($id);
        }
    }
}