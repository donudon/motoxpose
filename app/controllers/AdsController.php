<?php

class AdsController extends BaseController {


	public function getIndex(){

		$search = Input::get('search');
		if($search==""){
			$ms_ads = MsAds::paginate(3);
		}else{
			$ms_ads = MsAds::where('name', 'LIKE', '%'.$search.'%')->paginate(3);
		}
		$title = "Home";
		$user = Auth::user()->username;
		return View::make('ads',array('data'=>$ms_ads ,'title'=>$title,'user'=>$user, 'status'=>'ci'));
		//return View::make('insert');
	}

}
