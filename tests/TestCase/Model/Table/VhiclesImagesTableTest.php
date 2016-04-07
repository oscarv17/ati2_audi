<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VhiclesImagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VhiclesImagesTable Test Case
 */
class VhiclesImagesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\VhiclesImagesTable
     */
    public $VhiclesImages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vhicles_images',
        'app.vehicles',
        'app.appointments',
        'app.users',
        'app.user_vehicles',
        'app.services',
        'app.departments'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('VhiclesImages') ? [] : ['className' => 'App\Model\Table\VhiclesImagesTable'];
        $this->VhiclesImages = TableRegistry::get('VhiclesImages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->VhiclesImages);

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
