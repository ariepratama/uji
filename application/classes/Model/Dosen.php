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
			$this->_id = $this->nip;
		}
	}
}