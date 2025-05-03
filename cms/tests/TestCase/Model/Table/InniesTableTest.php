<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InniesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InniesTable Test Case
 */
class InniesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\InniesTable
     */
    protected $Innies;

    /**
     * Fixtures
     *
     * @var list<string>
     */
    protected array $fixtures = [
        'app.Innies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Innies') ? [] : ['className' => InniesTable::class];
        $this->Innies = $this->getTableLocator()->get('Innies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Innies);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\InniesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
