<?php
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

	class UpdateController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$ms_user = DB::table('ms_user')->where('id', $id)->first();
		//$newID = $ms_user->id +1;
		$title = "Update";
		$user = Auth::user()->username;
		return View::make('update', array('title' => $title,'data'=>$ms_user,'user'=>$user));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

	public function doUpdate()
	{
		DB::table('ms_user')
            ->where('id', Input::get('txtUserid'))
            ->update(array(
            	'username' => Input::get('txtUsername'),
		        'password' => Hash::make(Input::get('txtPassword'))
		    )
		);
		return Redirect::to('/');
		
	}
}
?>