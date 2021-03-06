<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SkeliCZ;

/**
 * Message Board data source
 *
 * @author vitex
 */
class MessageBoard extends \Ease\Brick
{
    public $myKeyColumn = 'id';
    public $myTable     = 'messageboard';

    /**
     * Sloupeček obsahující datum vložení záznamu do shopu
     * @var string
     */
    public $myCreateColumn = 'DatCreate';

    /**
     * Slopecek obsahujici datum poslení modifikace záznamu do shopu
     * @var string
     */
    public $myLastModifiedColumn = 'DatSave';

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