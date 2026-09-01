<?php
/**
 * Tests for DeFiVaultDiamond
 */

use PHPUnit\Framework\TestCase;
use Defivaultdiamond\Defivaultdiamond;

class DefivaultdiamondTest extends TestCase {
    private Defivaultdiamond $instance;

    protected function setUp(): void {
        $this->instance = new Defivaultdiamond(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Defivaultdiamond::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
