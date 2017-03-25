<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

	class InsertGController extends BaseController {

	public $restful = true;

	public function getIndex()
	{
		$ms_gallery = MsGallery::orderBy('id', 'desc')->first();
		$newID = $ms_gallery->id +1;
		$title = "Add New";
		$user = Auth::user()->username;
		return View::make('insertG', array('title' => $title, 'id'=>$newID, 'user'=>$user, 'status'=>'an'));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

	public function doInsert()
	{
		$thumbnail = Input::get('txtThumb');
		$image="";
		$caption="";
		date_default_timezone_set ("Asia/Jakarta");
        $created = date('Y-m-d H:i:s');
		for($i=0;$i<20;$i++){
			if(Input::get('txtImage-'.$i)==""){
				break;
			}else{
				$image = $image.Input::get('txtImage-'.$i).",";
				$caption = $caption.Input::get('txtCaption-'.$i).",";
			}
		}
		DB::table('ms_gallery')->insert(
			array(
				'link' => Input::get('txtLink'),
				'title' => Input::get('txtTitle'),
				'thumbnail' => $thumbnail,
		        'image' => $image,
		        'caption' => Input::get('txtDescription'),
		        'details' => $caption,
		        'created_at'=> $created
			)
		);
		return Redirect::to('/gallery');
	}
}
?>