<?php
	class DeleteController extends BaseController {

	public $restful = true;

	public function getIndex($id)
	{
		$del = DB::table('ms_user')->where('id', $id)->first();
		$ms_user = DB::table('ms_user')->where('id', '=', $id)->delete();
		return Redirect::to('/');
	}

}
?>