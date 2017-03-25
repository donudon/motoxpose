<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

	class InsertSController extends BaseController {

	public $restful = true;

	public function getIndex()
	{
		$ms_slider = MsSlider::orderBy('id', 'desc')->first();
		$newID = $ms_slider->id +1;
		$title = "Add New";
		$user = Auth::user()->username;
		return View::make('insertS', array('title' => $title, 'id'=>$newID, 'user'=>$user, 'status'=>'an'));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

	public function doInsert()
	{
		//$file = Input::file('txtImage');
		// if (Input::hasFile('txtImage'))
		// {
		    $file = Input::get('txtImage');\
			DB::table('ms_slider')->insert(
			    array(  'image' => $file
			    )
			);
			return Redirect::to('/slider');
		// }
		
	}
}
?>