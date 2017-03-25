<?php
	class DeleteSController extends BaseController {

		public $restful = true;

		public function getIndex($id)
		{
			$del = DB::table('ms_slider')->where('id', $id)->first();
			$data = array('data' => $del->image );
			$dest = public_path().'\img\slider\\';
			File::delete($dest.$data['data']);
			$ms_slider = DB::table('ms_slider')->where('id', '=', $id)->delete();
			return Redirect::to('/slider');
		}

	}
?>