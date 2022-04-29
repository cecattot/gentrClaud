<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PessoasFixture
 */
class PessoasFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'telefone' => 'Lorem ipsum do',
                'cpf' => 'Lorem ipsum ',
                'senha' => 'Lorem ipsum dolor sit amet',
                'created' => '2022-04-29 01:38:17',
                'modified' => '2022-04-29 01:38:17',
            ],
        ];
        parent::init();
    }
}
