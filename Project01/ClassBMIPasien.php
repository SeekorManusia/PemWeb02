<?php

class BMIpasien{
	public 	$Id,
	public 	$Pasien,
	public 	$BMI,
	public 	$Date;

	public function _construct($Id, $Pasien, $BMI, & $Date){
		$this->Id=$Id;
		$this->Pasien=$Pasien;
		$this->BMI=$BMI;
		$this->Date=$Date;
	}
}

?>