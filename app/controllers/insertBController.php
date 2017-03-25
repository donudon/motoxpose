<?php
require 'vendor/autoload.php';

use Intervention\Image\ImageManagerStatic as Image;

class InsertBController extends BaseController {

    public $restful = true;

    public function getIndex()
    {
        $ms_blog = MsBlog::orderBy('id', 'desc')->first();
        $newID = $ms_blog->id +1;
        $title = "Add New";
        $user = Auth::user()->username;
        return View::make('insertB', array('title' => $title, 'id'=>$newID, 'user'=>$user, 'status'=>'an'));
        //return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
    }

    public function doInsert()
    {
        // $created = (new \DateTime())->format('Y-m-d H:i:s');
        date_default_timezone_set ("Asia/Jakarta");
        $created = date('Y-m-d H:i:s');
        
        DB::table('ms_blog')->insert(
            array( 'title' =>  Input::get('txtTitle'),
                'link' => Input::get('txtLink'),
                'type' => Input::get('txtType'),
                'synopsis' => Input::get('txtSynopsis'),
                'thumbnail' => Input::get('txtImage'),
                'date_created' => $created,
                'author' => Input::get('txtAuthor'),
                'content' => Input::get('editor')
            )
        );
        return Redirect::to('/blog');
    }
}
?>