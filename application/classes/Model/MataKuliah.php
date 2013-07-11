<?php

class Model_MataKuliah extends PersistentObject{

	public $nama = "nama";
	public $mahasiswa;
	public $dosen;

	public function __construct($attrs = null)
	{

		$this->_id = "IF1233";
		$this->_id_db_type = "varchar(32)";
		$this->mahasiswa = array(new Model_Mahasiswa(), new Model_Mahasiswa());
		$this->dosen = new Model_Dosen();
		parent::__construct();

		$this->dosen = null;
		$this->mahasiswa = null;

		if ($attrs)
		{
			$fields = $this->get_fields();
			$attrs = json_decode($attrs);
			$meta = $this->get_metadata();

			foreach ($attrs as $params)
			{
				$field = $params->name;

				if (array_key_exists($field, $fields) && ! empty($params->value))
				{
					$is_object = $meta->is_attribute_object($field);
					$is_array = $meta->is_attribute_array($field);
					if (!  $is_object && ! $is_array)
						$this->$field = $params->value;
					else
					{
						$class_related = $meta->get_attribute_rel_with($field);
						if ($is_object)
						{
							$this->$field = new $class_related();
							$this->$field->where('_id', '=', $params->value)->retrieve();
						}
						else if ($is_array)
						{
							$rel = $meta->get_attribute_rel_with($field);
							if (! is_null($rel))
							{
								$ar_temp = array();
								$ar_temp[] = $params->value; 
								$this->$field = $ar_temp;
								
							}
						}
					}
						
				}
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