<?php

class Controller_Test extends Controller{

	public function action_index()
	{
		$object = new Model_Ruangan;

		$object->where('nama','like','76%')->delete();
	}
}