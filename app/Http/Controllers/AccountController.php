<?php
namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Follow;
use Illuminate\Support\Facades\Input;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Hash;
use Helper;
use Validator;

class AccountController extends Controller
{
	
	public function showRegisterForm()
	{
		//check if any user is logged in
        $logged = false;
        if(\Auth::check())
        {
            $logged = true;
        }
		return \View::make('account.daftar')->with('logged', $logged);
	}

	public function register()
	{

		//validate form
		$v = User::validateRegister(Input::all());

		if ($v->passes()){
			$username = Input::get('username');
			$email = Input::get('email');
			$password = Input::get('password');
			$retypepassword = Input::get('password_confirmation');

			$user = new User();			
			$user->username = $username;
			$user->email = $email;
			$password = hash::make($password);
			$user->password = $password;
			$user->save();

			return Redirect::to('/account/registersuccess');

		}else{
			return Redirect::to('/account/daftar')->withInput(Input::except('password', 'password_confirm'))->withErrors($v->getMessageBag());
		}
		
	}



	public function registerSuccess(){
		//check if any user is logged in
        $logged = false;
        if(\Auth::check())
        {
            $logged = true;
        }

		return \View::make('account.registerSuccess')->with('logged', $logged);
	}



	public function follow(){
		
		//get follow id
		$followid = $_POST['id'];

		//get current login user id
		$user = \Auth::User();
        $currentuserid = $user->id;

		//check apakah sudah terdaftar
		$strquery = "SELECT COUNT(userid) AS value FROM follow WHERE userid = " . 
					 DB::getPdo()->quote($currentuserid) . " AND follow = " . DB::getPdo()->quote($followid);

		$cnt = Helper::executeScalar($strquery);

		if ($cnt == 0 ) //following
		{
			$follow = new Follow();
			$follow->userid = $currentuserid;
			$follow->follow = $followid;
			$follow->save();
			return 'following';
			
		}else{ //unfollow
			$strquery = "DELETE FROM follow WHERE userid = " . 
					 DB::getPdo()->quote($currentuserid) . " AND follow = " . DB::getPdo()->quote($followid);
			$deleted = DB::delete(DB::raw($strquery));
			return 'unfollow';
		}

		return '';
	}
}

?>