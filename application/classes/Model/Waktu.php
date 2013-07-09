<?php

class Model_Waktu extends PersistentObject{
	public $start = "00.00";
	public $end = "00.00";

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