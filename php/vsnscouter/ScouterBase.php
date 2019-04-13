<?php
abstract class ScouterBase
{
    abstract protected function analyzeImage();
             
    abstract protected function findPowerData($employeeNo);
             
    abstract protected function score($powerData);
             
    abstract protected function display($resultScore);
    

    public function execute()
    {
        $employeeNo = $this->analyzeImage();

        $powerData = $this->findPowerData($employeeNo);
	
        $resultScore = $this->score($powerData);

        $this->display($resultScore);
    }
}
?>
