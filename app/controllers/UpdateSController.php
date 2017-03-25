<?php
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

	class UpdateSController extends BaseController {

		public $restful = true;

		public function getIndex($id)
		{
			$ms_slider = DB::table('ms_slider')->where('id', $id)->first();
			//$newID = $ms_slider->id +1;
			$title = "Update";
			$user = Auth::user()->username;
			return View::make('updateS', array('title' => $title,'data'=>$ms_slider,'user'=>$user));
			//return View::make('insert', array('title' => $title, 'data'=>$ms_slider));
		}

		public function doUpdate()
		{
			$file = Input::get('txtImage');
			DB::table('ms_slider')
	            ->where('id', Input::get('txtSliderid'))
	            ->update(array(
			        'image' => $file
			    )
			);
			return Redirect::to('/slider');
			
		}
	}
?>