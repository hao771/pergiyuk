<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Helper;

class StaticContentController extends Controller
{
	
	public function showAbout()
	{
		//check if any user is logged in
        $logged = false;
        $objusername = "";

        if(\Auth::check())
        {
        	$user = \Auth::User();
            $userid = $user->id;
            $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid);
            $objusername = Helper::executeScalar($strquery);

            $logged = true;
        }
		return \View::make('company.about')->with(['logged' => $logged, 'username' => $objusername]);
	}


	public function showPrivacy()
	{
		//check if any user is logged in
        $logged = false;
        $objusername = "";


        if(\Auth::check())
        {

        	$user = \Auth::User();
            $userid = $user->id;
            $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid);
            $objusername = Helper::executeScalar($strquery);

            $logged = true;
        }
		return \View::make('company.privacy')->with(['logged' => $logged, 'username' => $objusername]);
	}

	public function showPolicy()
	{
		//check if any user is logged in
        $logged = false;
        $objusername = "";
        
        if(\Auth::check())
        {
        	$user = \Auth::User();
            $userid = $user->id;
            $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid);
            $objusername = Helper::executeScalar($strquery);

            $logged = true;
        }
		return \View::make('company.Policy')->with(['logged' => $logged, 'username' => $objusername]);
	}

}

?>