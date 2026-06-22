<?php
/**
 * Tests for PixelPulse
 */

use PHPUnit\Framework\TestCase;
use Pixelpulse\Pixelpulse;

class PixelpulseTest extends TestCase {
    private Pixelpulse $instance;

    protected function setUp(): void {
        $this->instance = new Pixelpulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Pixelpulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
