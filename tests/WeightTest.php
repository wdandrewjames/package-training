<?php

namespace Wdandrewjames\Converter\Tests;

use PHPUnit\Framework\TestCase;
use Wdandrewjames\Converter\Weight;

class ExampleTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
