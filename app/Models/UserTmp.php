<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Validator;


class UserTmp extends Model
{
	protected $table = 'user_tmp';


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

}

?>