<?php
	class DeleteBController extends BaseController {

		public $restful = true;

		public function getIndex($id)
		{
			$del = DB::table('ms_blog')->where('id', $id)->first();
			$data = array('data' => $del->thumbnail );
			if($data){
				$dest = public_path().'\img\blog\\';
				File::delete($dest.$data['data']);
			}
			$ms_blog = DB::table('ms_blog')->where('id', '=', $id)->delete();;
			return Redirect::to('/blog');
			//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
		}

	}
?>