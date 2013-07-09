<?php

class Model_Ruangan extends PersistentObject{
	public $nama = "0000";
	// public $lantai = 1;

	public function __construct($attrs = null)
	{
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
			
		}
	}
}