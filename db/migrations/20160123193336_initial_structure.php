    <?php

use Phinx\Migration\AbstractMigration;

class InitialStructure extends AbstractMigration
{
    /**
     * LinkQuick inital DB structure
     */
    public function change()
    {
        // Migration for table entries
        $table = $this->table('news');
        $table
            ->addColumn('title', 'string', array('limit' => 128))
            ->addColumn('text', 'text', array('null' => true))
            ->addColumn('DatCreate', 'datetime', array())
            ->addColumn('DatSave', 'datetime', array('null' => true))
            ->addColumn('author', 'integer')
            ->create();
        
        $table = $this->table('lyrics');
        $table
            ->addColumn('name', 'string', array('limit' => 128))
            ->addColumn('text', 'text', array('null' => true))
            ->create();

        $table = $this->table('gallery');
        $table
            ->addColumn('title', 'string', array('limit' => 128))
            ->addColumn('note', 'string', array('limit' => 128))
            ->create();


        // Migration for table users
        $table = $this->table('user');
        $table
            ->addColumn('settings', 'text', array('null' => true))
            ->addColumn('email', 'string', array('limit' => 128))
            ->addColumn('firstname', 'string', array('null' => true, 'limit' => 32))
            ->addColumn('lastname', 'string', array('null' => true, 'limit' => 32))
            ->addColumn('password', 'string', array('limit' => 40))
            ->addColumn('login', 'string', array('limit' => 32))
            ->addColumn('DatCreate', 'datetime', array())
            ->addColumn('DatSave', 'datetime', array('null' => true))
            ->create();
    }
}
