<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePessoas extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('pessoas');
        $table->addColumn('nome', 'string', [
            'default' => null,
            'limit' => 180,
            'null' => true,
        ]);
        $table->addColumn('email', 'string', [
            'default' => null,
            'limit' => 180,
            'null' => true,
        ]);
        $table->addColumn('telefone', 'string', [
            'default' => null,
            'limit' => 16,
            'null' => true,
        ]);
        $table->addColumn('cpf', 'string', [
            'default' => null,
            'limit' => 14,
            'null' => true,
        ]);
        $table->addColumn('senha', 'string', [
            'default' => null,
            'limit' => 80,
            'null' => true,
        ]);
        $table->addColumn('created', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('modified', 'datetime', [
            'default' => null,
            'null' => false,
        ]);
        $table->create();
    }
}
