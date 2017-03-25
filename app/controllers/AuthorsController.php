<?php
	class AuthorsController extends BaseController {

	public $restful = true;

	public function get_Index()
	{
		return View::make('authors.index');
	}


}
?>