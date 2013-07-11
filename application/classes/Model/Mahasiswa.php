<?php

class Model_Mahasiswa extends Model_Orang{

	public $nim = "nim";
	public $jurusan = "jurusan";
	public $prodi = "informatika";
	public $th_masuk = 1000;

	public function __construct($attr = null){
		parent::__construct($attr);

		$this->_id = $this->nim;
	}

}