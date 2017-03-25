<?php
	class InsertController extends BaseController {

	public $restful = true;

	public function getIndex()
	{
		$ms_user = MsUser::orderBy('id', 'desc')->first();
		$newID = $ms_user->id +1;
		$title = "Add New";
		$user = Auth::user()->username;
		return View::make('insert', array('title' => $title, 'id'=>$newID, 'user'=>$user, 'status'=>'an'));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

	public function doInsert()
	{

		$validator = Validator::make(
		    array(
		        'username' => Input::get('txtUsername'),
		        'password' => Input::get('txtPassword')
		    ),
		    array(
		        'username' => 'required|unique:ms_user',
		        'password' => 'required|unique:ms_user'
		    )
		);
		if ($validator->fails())
		{
		    // The given data did not pass validation
		    $messages = $validator->messages();
		    //print_r($validator);die();
		    return Redirect::to('insert')->withErrors($validator)->withInput();
		}
		else
		{
		    //
		 	//    $file = Input::file('txtImage');
			// $filename = Input::file('txtImage')->getClientOriginalName();
			// $filename= Input::get('txtUsername').$filename;
			// $dest = public_path().'\Img';
			// $file->move($dest, $filename);
			$msUser = new MsUser;
			$msUser->username = Input::get('txtUsername');
			$msUser->password = Hash::make(Input::get('txtPassword'));
			$msUser->save();
			return Redirect::to('/');
		}
		
	}
}
?>