<?php

namespace Tim\Skeleton\Test;

use Tim\Skeleton\Example;

class ExampleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests if the example text is returned.
     */
    public function testReturnsExampleText()
    {
        $example = new Example();

        $this->assertEquals('This is an example.', $example->get());
    }

}