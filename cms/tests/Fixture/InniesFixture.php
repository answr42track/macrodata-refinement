<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * InniesFixture
 */
class InniesFixture extends TestFixture
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
                'inny_id' => '2dab4023-fcdf-4515-8209-bed7c55799e9',
                'inny_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
