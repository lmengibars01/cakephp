<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PeticionesTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PeticionesTable Test Case
 */
class PeticionesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PeticionesTable
     */
    protected $Peticiones;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Peticiones',
        'app.Categorias',
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
        $config = $this->getTableLocator()->exists('Peticiones') ? [] : ['className' => PeticionesTable::class];
        $this->Peticiones = $this->getTableLocator()->get('Peticiones', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Peticiones);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PeticionesTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PeticionesTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
