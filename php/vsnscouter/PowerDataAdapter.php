<?php
require('PowerData.php');

interface IPowerDataAdapter
{
    // パワー情報を社員番号をキーにして取得します。
    public function findByEmployeeNo($empNo);
}

class PowerDataAdapterMock implements IPowerDataAdapter
{
    // パワー情報を社員番号をキーにして取得します。
    public function findByEmployeeNo($empNo) {
        return new PowerData('2003207', 77, 320);
    }
}
?>
