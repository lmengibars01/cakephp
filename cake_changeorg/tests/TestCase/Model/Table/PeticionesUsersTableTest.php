<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeticionesUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeticionesUsersTable Test Case
 */
class PeticionesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeticionesUsersTable
     */
    protected $PeticionesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.PeticionesUsers',
        'app.Peticiones',
        'app.Users',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PeticionesUsers') ? [] : ['className' => PeticionesUsersTable::class];
        $this->PeticionesUsers = $this->getTableLocator()->get('PeticionesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->PeticionesUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PeticionesUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PeticionesUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
