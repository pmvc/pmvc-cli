<?php

namespace PMVC;

use PMVC\TestCase;

class PMVCCliTest extends TestCase
{
    /**
     *
     */
    function testBin()
    {
        exec('php ' . __DIR__ . '/../bin/pmvc 2>/dev/null', $output);
        $this->haveString('Workplace', $output[0]);
    }
}
