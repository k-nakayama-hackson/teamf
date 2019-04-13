<?php
class PowerData
{
    public $employeeNo = '';

    public $followerCount = 0;

    public $goodCount = 0;
    

    function __construct($empNo = '', $follower = 0, $good = 0)
    {
        $this->employeeNo = $empNo;
	$this->followerCount = $follower;
	$this->goodCount = $good;
    }
}
?>
