<?php

class LoginController extends BaseController {


	public function getIndex(){

		$title = "Login";
		return View::make('login',array('title'=>$title));
	}

	public function doLogin()
	{
		$validator = Validator::make(
		    array(
		        'username' => Input::get('txtUsername'),
		        'password' => Input::get('txtPassword')
		    ),
		    array(
		        'username' => 'required',
		        'password' => 'required'
		    )
		);
		if ($validator->fails())
		{
		    // The given data did not pass validation
		    $messages = $validator->messages();
		    //print_r($validator);die();
		    return Redirect::to('login')->withErrors($validator)->withInput();
		}else if(MsUser::where('username', Input::get('txtUsername'))->where('password', Input::get('txtPassword'))==null)
		{
			$mlog = "Username or Password doesn't exists";
			return Redirect::to('login')->withErrors($m);
		}else{
			
			// $log = MsUser::where('username', Input::get('txtUsername'))->where('password', Input::get('txtPassword'))->first();
			// $user = array('user' => $log->username);
			// $pass = array('pass' => $log->password);
			$authFlag = Auth::attempt(array(
				'username'=>Input::get('txtUsername'),
				'password'=>Input::get('txtPassword')
			));
			//print_r($authFlag);die();
			if ($authFlag) {

		        // validation successful!
		        // redirect them to the secure section or whatever
		        // return Redirect::to('secure');
		        // for now we'll just echo success (even though echoing in a controller is bad)
		        echo 'SUCCESS!';
		        $title = "Home";
		        $user = Input::get('txtUsername');
		        return Redirect::action('UserController@getIndex');
		        //return View::make('hello','HomeController@getIndex');

		    } else {        
		        // validation not successful, send back to form 
		        $validator = array('wrong' => "Wrong username or password");
				return Redirect::to('login')->withErrors($validator)->withInput();
		    }
		}
		
	}

}
