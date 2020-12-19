<?php
class PMVCCliTest extends PMVC_TestCase
{
    function testBin()
    {
        exec('php '.__DIR__.'/bin/pmvc', $output);
        $this->haveString('Plugin: controller',$output[1]);
    }

}
