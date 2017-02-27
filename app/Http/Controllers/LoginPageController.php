<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Validator;
use Session;
use Auth;
use Helper;



class LoginPageController extends Controller
{
	
	public function showLogin()
	{
		if(\Auth::check()){
            //check is administrator
            $user = Auth::User();
            $userid = $user->id;

            $strquery = "SELECT u.userrole as value FROM users u WHERE u.id = ".$userid;
            $objrole = Helper::executeScalar($strquery);
            if($objrole == 1) {
                return Redirect::to('/admin/dashboard');    
            }
            return Redirect::to("/");
        }
        else{
            return \View::make('admin.login');    
        }
	}

    public function showloginfrontend()
    {
        //check if any user is logged in
        $logged = false;
        if(\Auth::check())
        {
            $logged = true;
        }
		
        return \View::make('account.login')
				->with('logged', $logged);
    }
	
	public function frontEndLogin()
	{
		//Getting all post data
        $data = Input::all();
		$return = "/";
		
		if (isset($_POST['returnURL']))
		{
			if ($_POST['returnURL'] != '') {
				$return =  $_POST['returnURL']; 
			}
		}
		

        $v = User::validateLogin(Input::all());

        if ($v->passes()){
            $userdata = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );
            
            
            //doing login
            if (Auth::validate($userdata)){
                if(Auth::attempt($userdata)){
                    return Redirect::to($return);
                }
            }
            else {
                //if any error occurred send back with message
                Session::flash('alert-warning', 'Username atau Password Salah');
                return Redirect::to('/account/login?returnURL='.$return);
            }

        }else{
            return Redirect::to('/account/login?returnURL='.$return)->withInput(Input::except('password'))->withErrors($v->getMessageBag());
        }	
		
	}


	public function login()
    {
        //Getting all post data
        $data = Input::all();
        
        //validation
        $rules = array(
            'username' => 'required',
            'password' => 'required'
            );
        $validator = Validator::make($data, $rules);

        if($validator->fails()){
            return Redirect::to('/admin/login')->withInput(Input::except('password'))->withErrors($validator);
        }
        else {
            $userdata = array(
                'username' => Input::get('username'),
                'password' => Input::get('password')
            );

            //doing login
            if (Auth::validate($userdata)){
                if(Auth::attempt($userdata)){
                    return Redirect::intended('/admin');
                }
            }
            else {
                //if any error occurred send back with message
                Session::flash('error', 'Wrong Username or Password');
                return Redirect::to('admin/login');
            }
         }           
    }


    public function logout() {
    	Auth::logout();
        Session::flash('alert-success', 'You have been successfully logged out!');
    	return Redirect::to('/admin/login');
    }

    public function logoutfrontend() {
        Auth::logout();
        return Redirect::to('/');
    }


    public function showforgotpassword()
    {
        //check if any user is logged in
        $logged = false;
        if(\Auth::check())
        {
            $logged = true;
        }
        
        return \View::make('account.forgotpassword')
                ->with('logged', $logged);
    }


}

?>