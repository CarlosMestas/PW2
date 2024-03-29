<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AccessLevelsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AccessLevelsTable Test Case
 */
class AccessLevelsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AccessLevelsTable
     */
    public $AccessLevels;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.AccessLevels',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('AccessLevels') ? [] : ['className' => AccessLevelsTable::class];
        $this->AccessLevels = TableRegistry::getTableLocator()->get('AccessLevels', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->AccessLevels);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
