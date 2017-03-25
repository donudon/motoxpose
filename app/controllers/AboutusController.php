<?php

class AboutusController extends BaseController {

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

		// $search = Input::get('search');
		// if($search==""){
		// 	$ms_user = MsUser::paginate(3);
		// }else{
		// 	$ms_user = MsUser::where('username', 'LIKE', '%'.$search.'%')->paginate(3);
		// }
		// $title = "Home";
		// $user = Auth::user()->username;
		// return View::make('hello',array('data'=>$ms_user,'title'=>$title,'user'=>$user, 'status'=>'ci'));
		$title = "MotoXpose - About Us";
		$data = MsSlider::paginate(4);;
		return View::make('aboutus', array('title'=>$title, 'data'=>$data));
	}

}
