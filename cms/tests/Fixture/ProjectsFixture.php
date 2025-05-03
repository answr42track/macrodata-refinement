<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 */
class ProjectsFixture extends TestFixture
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
                'project_id' => 'c23a18e9-9eef-4017-bd65-f583033447a4',
                'project_name' => 'Lorem ipsum dolor sit amet',
                'progression' => 1,
                'inny_id' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
