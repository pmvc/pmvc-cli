<?php
class PMVCCliTest extends PMVC_TestCase
{
    function testBin()
    {
        $output = exec('php '.__DIR__.'/bin/pmvc');
        $this->haveString('Plugin: controller',$output);
    }

}
