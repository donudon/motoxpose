<?php

class BlogController extends BaseController {


	public function getIndex(){

		 $search = Input::get('search');
		 if($search==""){
		 	$ms_blog = MsBlog::paginate(3);
		 }else{
			 $ms_blog = DB::table('ms_blog')->where('title', 'LIKE', '%'.$search.'%')->paginate(3);
		 }
		$title = "Blog";
		$user = Auth::user()->username;
		return View::make('blog',array('title'=>$title,'user'=>$user, 'data'=>$ms_blog));
		//return View::make('insert');
	}

}
