<?php
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

	class UpdateGController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$ms_gallery = DB::table('ms_gallery')->where('id', $id)->first();
		//$newID = $ms_gallery->id +1;
		$title = "Update";
		$user = Auth::user()->username;
		return View::make('updateG', array('title' => $title,'data'=>$ms_gallery,'user'=>$user));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_gallery));
	}

	public function doUpdate()
	{
		$id = Input::get('txtUserid');
		$thumbnail = Input::get('txtThumbnail');
		$image="";
		$caption="";
		for($i=0;$i<20;$i++){
			if(Input::get('txtImage-'.$i)==""){
				break;
			}else{
				$image = $image.Input::get('txtImage-'.$i).",";
				$caption = $caption.Input::get('txtCaption-'.$i).",";
			}
		}
		DB::table('ms_gallery')
            ->where('id', Input::get('txtUserid'))
            ->update(array(
            	'link' => Input::get('txtLink'),
				'title' => Input::get('txtTitle'),
		        'thumbnail' => $thumbnail,
		        'image' => $image,
		        'caption' => Input::get('txtDescription'),
		        'details' => $caption
		    )
		);
		return Redirect::to('/gallery');
		// $img = explode(",", $image);
		// foreach ($img as $key => $value) {
		// 	if($value!=""){
		// 		print_r($value."\n");
		// 	}	
		// }
		
	}
}
?>