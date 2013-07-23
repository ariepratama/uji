<?php

abstract class Model_Orang extends PersistentObject{
	
	public $nama = "nama";
	protected $umur = 1;
	public $jenis_kelamin = "laki";
	protected $agama = "agama";

	public function __construct($attrs = null)
	{

		$this->_id = "nama";
		$this->_id_db_type = "varchar(50)";
		parent::__construct();

		if ($attrs)
		{
			$fields = $this->get_fields();
			$attrs = json_decode($attrs);

			foreach ($attrs as $params)
			{
				$field = $params->name;
				if (array_key_exists($field, $fields) && ! empty($params->value))
					$this->$field = $params->value;
			}
			$this->_id = $this->nama;
			
		}

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
			$this->_id = $this->nama;
		}
	}

}