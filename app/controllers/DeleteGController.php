<?php
	class DeleteGController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$del = DB::table('ms_gallery')->where('id', $id)->first();
		$data = array('data' => $del->thumbnail );
		$dest = public_path().'\img\gallery\\';
		File::delete($dest.$data['data']);
		$exp = explode(",", $del->image);
		foreach ($exp as $key => $value) {
			print_r($value);
			File::delete($dest.$value);
		}
		$ms_gallery = DB::table('ms_gallery')->where('id', '=', $id)->delete();
		return Redirect::to('/gallery');
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

}
?>