<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Uji extends Controller{

	public function action_index()
	{
		$class = Arr::get($_GET,"class");
		$objects = null;
		$active_class = null;

		if (! empty($class))
		{
			$active_class = $class;

			$class = 'Model_'.$class;
			$object = new $class();
			$objects = $object->retrieve_all();
			// print_r($objects);
		}

		$this->response->body(View::factory('pages/uji1')
							  ->bind('objects', $objects)
							  ->bind('active_class',$active_class));
	}

	public function action_fields()
	{
		$class = Arr::get($_GET, "class");
		if (! empty($class))
		{
			$obj = PersistentObject::factory('Model_'.$class);
			$fields = $obj->get_fields();

			// print_r($fields);
			echo json_encode($fields);
		}
		return null;
	}

	public function action_save()
	{
		$attributes = Arr::get($_GET, "attributes");
		$class = 'Model_'.Arr::get($_GET, "class");
		$object = new $class($attributes);
		$object->save();

	}

	public function action_retrieve()
	{
		$condition = Arr::get($_GET, "column");
		$operator = Arr::get($_GET, "operator");
		$value = Arr::get($_GET, "value");
		$active_class = Arr::get($_GET, "class");
		$class = 'Model_'.$active_class;


		$object = new $class();

		$objects = $object->where($condition, $operator, $value)->retrieve_all();

		$this->response->body(View::factory('pages/uji1')
							  ->bind('objects', $objects)
							  ->bind('active_class',$active_class));

	}

	public function action_update()
	{
		$attributes = Arr::get($_GET, "attributes");
		$attributes = json_decode($attributes, true);
		$id = null;
		foreach ($attributes as $attribute)
		{
			if ($attribute["name"] == "_id")
				$id = $attribute["value"];
		}
		
		echo $id;
		$class = 'Model_'.Arr::get($_GET, "class");
		$object = new $class();
		
		$object->where('_id', '=', $id)->retrieve();
		$object->set($attributes);

		if ($object->is_retrieved())
			$object->save();
		
		// print_r ($object);
	}

	public function action_delete()
	{
		$condition = Arr::get($_GET, "column");
		$operator = Arr::get($_GET, "operator");
		$value = Arr::get($_GET, "value");
		$class = 'Model_'.Arr::get($_GET, "class");


		$object = new $class();

		$object->where($condition, $operator, $value)->delete();
	}



}