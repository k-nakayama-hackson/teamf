<?php
require('ScouterBase.php');
require('PowerData.php');

class ScouterMock extends ScouterBase
{
    private $filePath;

    function __construct($targetFile = null)
    {
        $this->filePath = $targetFile;
    }
    
    protected function analyzeImage()
    {
        return '2003207';
    }

    protected function findPowerData($employeeNo)
    {
        return new PowerData('2003207', 77, 320);
    }

    protected function score($powerData)
    {
        $w1 = rand(1, 5);
	$w2 = rand(1, 10);
	
        return $powerData->followerCount * $w1 + $powerData->goodCount * $w2;
    }

    protected function display($scoreResult)
    {
        echo '結果: ' . $scoreResult;
    }
}
?>
