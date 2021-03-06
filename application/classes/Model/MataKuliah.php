<?php

class Model_MataKuliah extends PersistentObject{

	public $nama = "nama";
	public $mahasiswa;
	public $dosen;
	public $waktu;

	public function __construct($attrs = null)
	{

		$this->_id = "IF1233";
		$this->_id_db_type = "varchar(32)";
		$this->mahasiswa = array(new Model_Mahasiswa(), new Model_Mahasiswa());
		$this->dosen = new Model_Dosen();
		$this->waktu = new Model_Waktu();

		parent::__construct();

		$this->dosen = null;
		$this->mahasiswa = null;
		$this->waktu = null;

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
							$this->$field->set_pk_value($params->value);
							// $this->$field->where('_id', '=', $params->value)->retrieve();
						}
						else if ($is_array)
						{
							$rel = $meta->get_attribute_rel_with($field);
							if (! is_null($rel))
							{
								
								$vals = explode(',', $params->$value);
								print_r($vals);
								$ar_temp = array();
								foreach($vals as $val)
								{
									$obj = new $rel();
									$obj->set_pk_value($val);
									$ar_temp[] = $obj; 
								}
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