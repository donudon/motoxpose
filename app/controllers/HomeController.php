<?php

class HomeController extends BaseController {

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

		$ms_slider = MsSlider::paginate(4);
		$title = "MotoXpose";
		$ms_ads = MsAds::all();
		$jumlah = MsAds::all()->count();
		$news = MsBlog::where("type","News")->orderBy("id", "desc")->get();
		$events = MsBlog::where("type","Events")->orderBy("id", "desc")->get();
		$activities = MsBlog::where("type","Activities")->orderBy("id", "desc")->get();
		// $search = Input::get('search');
		// if($search==""){
		// 	$ms_user = MsUser::paginate(3);
		// }else{
		// 	$ms_user = MsUser::where('username', 'LIKE', '%'.$search.'%')->paginate(3);
		// }
		// $title = "Home";
		// $user = Auth::user()->username;
		// return View::make('hello',array('data'=>$ms_user,'title'=>$title,'user'=>$user, 'status'=>'ci'));
		return View::make('home', array('data' =>$ms_slider ,'title' =>$title, 'ads'=>$ms_ads, 'jmlAds' => $jumlah, 'news'=>$news, 'events'=>$events, 'activities'=>$activities));
	}

}
