<?php

class UserController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/
	public function getIndex(){

		$search = Input::get('search');
		if($search==""){
			$ms_user = MsUser::paginate(3);
		}else{
			$ms_user = MsUser::where('username', 'LIKE', '%'.$search.'%')->paginate(3);
		}
		$title = "User";
		$user = Auth::user()->username;
		return View::make('user',array('data'=>$ms_user,'title'=>$title,'user'=>$user, 'status'=>'ci'));
		//return View::make('insert');
	}

}
