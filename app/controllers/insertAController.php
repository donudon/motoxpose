<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

	class InsertAController extends BaseController {

	public $restful = true;

	public function getIndex()
	{
		$ms_ads = MsAds::orderBy('id', 'desc')->first();
		$newID = $ms_ads->id +1;
		$title = "Add New";
		$user = Auth::user()->username;
		return View::make('insertA', array('title' => $title, 'id'=>$newID, 'user'=>$user, 'status'=>'an'));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

	public function doInsert()
	{
		$file = Input::get('txtImage');
		DB::table('ms_ads')->insert(
		    array(  'image' => $file,
		    		'startdate'=> Input::get('txtSDate'),
		    		'enddate'=> Input::get('txtEDate')
		    )
		);

		return Redirect::to('/ads');
		
	}
}
?>