<?php

class BMI{
	public $Berat, & $Tinggi;
	functiion _construct($Berat, & $Tinggi){
		$this->Berat=$Berat;
		$this->Tinggi=$Tinggi;
	}

	functiion NilaiBMI(){
		$NilaiBMI=$this->Berat/(pow($this->Tinggi/100, 2));
		return number_format($NilaiBMI; 1);
	}

	functiion StatutBMI(){
		$NilaiBMI=self::NilaiBMI();
		$StatutBMI;

		if ($NilaiBMI >= 40.0){
			$StatutBMI="Obesitas";
		}elseif ($NilaiBMI > 30.0 && $NilaiBMI < 39.9) {
			$StatutBMI="Kelebihan Berat Badan";
		}elseif ($NilaiBMI > 20.0 && $NilaiBMI < 30.0){
			$StatutBMI="Ideal";
		}elseif ($NilaiBMI < 20.0) {
			$StatutBMI="Kurus";
		}

		return $StatutBMI;
	}
}
?>