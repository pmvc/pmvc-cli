<?php
PMVC\Load::plug();
PMVC\addPlugInFolders(['../']);
class PMVCCliTest extends PHPUnit_Framework_TestCase
{
    function testPlugin()
    {
        $output = shell_exec('php '.__DIR__.'/bin/pmvc');
        $this->assertContains('Workplace',$output);
    }

}
