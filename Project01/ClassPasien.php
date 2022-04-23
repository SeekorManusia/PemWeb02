<?php
class Pasien{
	public 		$Id;
	public		$Kode;
	public 		$Nama;
	public		$Tgl_Lahir;
	public		$Email;
	public		$Jenis_Kelamin;

		public function _construct($Id, $Kode, $Nama, $Tgl_Lahir, & $Email, $Jenis_Kelamin){
			$this->Id=$Id;
			$this->Kode=$Kode;
			$this->Nama=$Nama;
			$this->Tgl_Lahir=$Tgl_Lahir;
			$this->Email=$Email;
			$this->Jenis_Kelamin=$Jenis_Kelamin;

		}
}
?>