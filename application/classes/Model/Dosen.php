<?php

class Model_Dosen extends Model_Orang{
	public $nip = "123";
	public $jurusan = "IF";
	public $fakultas = "STEI";
	public $jabatan = "Pengajar";

	public function __construct($attr = null){
		parent::__construct($attr);

		$this->_id = $this->nip;
	}
}