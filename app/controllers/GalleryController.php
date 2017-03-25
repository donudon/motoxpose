<?php

class GalleryController extends BaseController {


	public function getIndex(){

		$search = Input::get('search');
		if($search==""){
			$ms_gallery = MsGallery::paginate(3);
		}else{
			$ms_gallery = MsGallery::where('caption', 'LIKE', '%'.$search.'%')->paginate(3);
		}
		$title = "Home";
		$user = Auth::user()->username;
		return View::make('gallery',array('data'=>$ms_gallery , 'title'=>$title,'user'=>$user, 'status'=>'ci'));
		//return View::make('insert');
	}

}
