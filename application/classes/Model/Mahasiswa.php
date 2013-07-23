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

	public function set($attrs = null)
	{
		if ($attrs)
		{
			$fields = $this->get_fields();

			foreach ($attrs as $params)
			{
				$field = $params["name"];
				if (array_key_exists($field, $fields) && ! empty($params["value"]))
					$this->$field = $params["value"];
			}
			$this->_id = $this->nim;
		}
	}

}