<?php
require 'vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManagerStatic as Image;

	class UpdateBController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$ms_blog = DB::table('ms_blog')->where('id', $id)->first();
		//$newID = $ms_blog->id +1;
		$title = "Update";
		$user = Auth::user()->username;
		return View::make('updateB', array('title' => $title,'data'=>$ms_blog,'user'=>$user));
		//return View::make('insert', array('title' => $title, 'data'=>$ms_blog));
	}

	public function doUpdate()
	{
		$id = Input::get('txtArticleid');
		DB::table('ms_blog')
            ->where('id', Input::get('txtArticleid'))
            ->update(array(
            	'title' => Input::get('txtTitle'),
		        'link' => Input::get('txtLink'),
		        'type' => Input::get('txtType'),
		        'synopsis' => Input::get('txtSynopsis'),
		        'thumbnail' => Input::get('txtImage'),
		        'author' => Input::get('txtAuthor'),
		        'content' => Input::get('editor')
		    )
		);
        return Redirect::to('/blog');
		
	}
}
?>