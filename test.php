<?php
PMVC\Load::plug();
PMVC\addPlugInFolder('../');
class PMVCCliTest extends PHPUnit_Framework_TestCase
{
    function testPlugin()
    {
        $output = shell_exec("bin/pmvc");
        $this->assertContains('Workplace',$output);
    }

}
