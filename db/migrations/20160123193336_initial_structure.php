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
            ->addColumn('title', 'string', ['limit' => 128])
            ->addColumn('text', 'text', ['null' => true])
            ->addColumn('DatCreate', 'datetime', [])
            ->addColumn('DatSave', 'datetime', ['null' => true])
            ->addColumn('author', 'integer')
            ->addColumn('language', 'string', ['limit' => 2])
            ->create();

        $table = $this->table('lyrics');
        $table
            ->addColumn('name', 'string', ['limit' => 128])
            ->addColumn('text', 'text', ['null' => true])
            ->create();

        $table = $this->table('gallery');
        $table
            ->addColumn('title', 'string', ['limit' => 128])
            ->addColumn('note', 'string', ['limit' => 128])
            ->create();


        // Migration for table users
        $table = $this->table('user');
        $table
            ->addColumn('settings', 'text', ['null' => true])
            ->addColumn('email', 'string', ['limit' => 128])
            ->addColumn('firstname', 'string', ['null' => true, 'limit' => 32])
            ->addColumn('lastname', 'string', ['null' => true, 'limit' => 32])
            ->addColumn('password', 'string', ['limit' => 40])
            ->addColumn('login', 'string', ['limit' => 32])
            ->addColumn('DatCreate', 'datetime', [])
            ->addColumn('DatSave', 'datetime', ['null' => true])
            ->create();
    }
}
