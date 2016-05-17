<?php
PMVC\Load::plug();
PMVC\addPlugInFolders(['../']);
class PMVCCliTest extends PHPUnit_Framework_TestCase
{
    /**
     * @expectedException PHPUnit_Framework_Exception
     */
    function testBin()
    {
        $output = exec('php '.__DIR__.'/bin/pmvc');
        $this->assertContains('Workplace',$output);
    }

}
