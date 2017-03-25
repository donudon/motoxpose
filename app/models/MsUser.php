<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class MsUser extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'ms_user';
	public $timestamps = false;
	protected $fillable = array('username','password');
	protected $hidden = array('password');

	public function getAuthIdentifier(){
		return $this->getKey();
	}
	public function getAuthPassword(){
		return $this->password;
	}

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}
