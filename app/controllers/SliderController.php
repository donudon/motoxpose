<?php

class SliderController extends BaseController {


	public function getIndex(){

		$search = Input::get('search');
		if($search==""){
			$ms_slider = MsSlider::paginate(4);
		}else{
			$ms_slider = MsSlider::where('name', 'LIKE', '%'.$search.'%')->paginate(3);
		}
		$title = "Home";
		$user = Auth::user()->username;
		return View::make('slider',array('data'=>$ms_slider ,'title'=>$title,'user'=>$user, 'status'=>'ci'));
		//return View::make('insert');
	}

}
