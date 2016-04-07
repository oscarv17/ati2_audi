<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UserVehiclesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UserVehiclesTable Test Case
 */
class UserVehiclesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UserVehiclesTable
     */
    public $UserVehicles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.user_vehicles',
        'app.users',
        'app.vehicles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UserVehicles') ? [] : ['className' => 'App\Model\Table\UserVehiclesTable'];
        $this->UserVehicles = TableRegistry::get('UserVehicles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UserVehicles);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
