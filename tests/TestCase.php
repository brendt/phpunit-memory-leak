<?php

namespace PhpUnitTest;

class TestCase extends \PHPUnit\Framework\TestCase
{
    protected function tearDown(): void
    {
        parent::tearDown();

        echo memory_get_usage() . PHP_EOL;
    }
}
