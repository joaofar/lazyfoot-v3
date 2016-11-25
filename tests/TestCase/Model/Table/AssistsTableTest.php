<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AssistsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AssistsTable Test Case
 */
class AssistsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AssistsTable
     */
    public $Assists;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.assists',
        'app.games',
        'app.goals',
        'app.teams',
        'app.ratings',
        'app.players',
        'app.invites',
        'app.games_players',
        'app.players_teams'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Assists') ? [] : ['className' => 'App\Model\Table\AssistsTable'];
        $this->Assists = TableRegistry::get('Assists', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Assists);

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
