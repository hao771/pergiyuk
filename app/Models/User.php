<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Validator;


class User extends Model
{
	protected $table = 'users';


	public $timestamps = false;

	public static function validateRegister($input){
		$rules = array(
				 'username' => 'Required|Min:3|Unique:users|AlphaNum',
				 'email' => 'Required|Email|Unique:users',
				 'password' => 'Required|AlphaNum|Confirmed',
				 'password_confirmation' => 'Required|AlphaNum',
				 'agree' => 'Required'

			);

		return Validator::make($input, $rules);
	}

	public static function validateLogin($input){
		$rules = array(
				 'username' => 'Required|AlphaNum',
				 'password' => 'Required|AlphaNum'

			);

		return Validator::make($input, $rules);
	}


	public static function validateEditProfile($input){
		$rules = array(
				 'firstname' => 'Required',
				 'email' => 'Required|Email'

			);

		return Validator::make($input, $rules);
	}

}

?>