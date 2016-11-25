<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InvitesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InvitesTable Test Case
 */
class InvitesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InvitesTable
     */
    public $Invites;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.invites',
        'app.games',
        'app.assists',
        'app.teams',
        'app.goals',
        'app.players',
        'app.ratings',
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
        $config = TableRegistry::exists('Invites') ? [] : ['className' => 'App\Model\Table\InvitesTable'];
        $this->Invites = TableRegistry::get('Invites', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Invites);

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
