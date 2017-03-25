<?php
	class DeleteAController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$del = DB::table('ms_ads')->where('id', $id)->first();
		$data = array('data' => $del->image );
		$dest = public_path().'\img\ads\\';
		File::delete($dest.$data['data']);
		$ms_ads = DB::table('ms_ads')->where('id', '=', $id)->delete();
		return Redirect::to('/ads');
		//return View::make('insert', array('title' => $title, 'data'=>$ms_customer));
	}

}
?>