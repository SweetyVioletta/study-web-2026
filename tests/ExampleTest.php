<?php

namespace tests;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testExample(): void
    {
        $this->assertTrue(true);
        $this->assertFalse(false);
        $this->assertEquals(3, 2 + 1);
        $this->assertNotEmpty(['string']);
        $this->assertEmpty([]);
        $this->assertNull(null);
        $this->assertCount(1, ['string']);
    }
}
