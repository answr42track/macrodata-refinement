<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * BinsFixture
 */
class BinsFixture extends TestFixture
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
                'bin_id' => '9af72158-1ea6-4130-b2fe-3a61e9205d20',
                'bin_name' => 'Lorem ipsum dolor sit amet',
                'project_id' => 'Lorem ipsum dolor sit amet',
                'bin_progression' => 1,
            ],
        ];
        parent::init();
    }
}
