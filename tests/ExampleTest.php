<?php

namespace Tim\Skeleton\Test;

use Tim\Skeleton\Example;

class ExampleTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Tests if the example message is returned.
     */
    public function testReturnsExampleMessage()
    {
        $example = new Example();

        $this->assertEquals('This is an example message.', $example->getMessage());
    }

}