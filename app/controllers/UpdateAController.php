<?php
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

	class UpdateAController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$ms_ads = DB::table('ms_ads')->where('id', $id)->first();
		//$newID = $ms_ads->id +1;
		$title = "Update";
		$user = Auth::user()->username;
		return View::make('updateA', array('title' => $title,'data'=>$ms_ads,'user'=>$user));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

	public function doUpdate()
	{
		$id = Input::get('txtAdsId');
		$file = Input::get('txtImage');
		DB::table('ms_ads')
            ->where('id', Input::get('txtAdsId'))
            ->update(array(
            	'enddate' => Input::get('txtEDate'),
		        'image' => $file
		    )
		);
		return Redirect::to('/ads');		
	}
}
?>