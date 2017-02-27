<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use DB;
use Helper;

class ProfileController extends Controller
{
	

	public function memberProfile($username)
	{
		//check if any user is logged in
        $logged = false;
        $sameuser = false;
        $following = false;

        //check if username is registered
        $strquery = "SELECT COUNT(u.id) as value FROM users u WHERE u.username = ". DB::getPdo()->quote($username); 
        $cnt = Helper::executeScalar($strquery);
        if($cnt == 0){
            return "User Not Found"; //page not found page
        }



        if(\Auth::check())
        {
            //GET USERNAME
            $user = \Auth::User();
            $userid = $user->id;

            $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid); 
            $objusername = Helper::executeScalar($strquery);

            if ($objusername == $username){
                $sameuser = true;
            }


            //GET VISITED USERID 
            $strquery = "SELECT u.id as value FROM users u WHERE u.username = ". DB::getPdo()->quote($username);
            $objvisiteduserid = Helper::executeScalar($strquery);            


            $strquery = "SELECT COUNT(f.userid) as value FROM follow f WHERE 
                        f.userid = ". DB::getPdo()->quote($userid) . " AND f.follow = " . DB::getPdo()->quote($objvisiteduserid);
            $followingvisited = Helper::executeScalar($strquery);


            if ($followingvisited == 1)
            {
                $following = true;
            }

            $logged = true;

            //get member data
            $memberdata = User::find($userid);

        }


        return \View::make('account.profile')->with(['logged' => $logged, 'username' => $objusername, 
                                             'sameuser' => $sameuser, 'userid' => $userid, 'following' => $following,
                                             'memberdata' => $memberdata]);
	}

	public function editProfile($username)
	{
		//check if any user is logged in
        //GET USERNAME
        $user = \Auth::User();
        $userid = $user->id;

        $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid); 
        $objusername = Helper::executeScalar($strquery);

        $logged = false;

        //GET Profile Data
        $memberdata = User::find($userid);

        if(\Auth::check())
        {
            $logged = true;
        }
		return \View::make('account.editprofile')->with(['logged' => $logged, 'username' => $objusername, 'memberdata' => $memberdata]);
	}


    public function update()
    {
        //validate form
        $v = User::validateEditProfile(Input::all());

        $user = \Auth::User();
        $userid = $user->id;

        $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid); 
        $objusername = Helper::executeScalar($strquery);

        if ($v->passes()){
            
            $profile = User::find($userid);

            $profile->firstname = Input::get('firstname');
            $profile->lastname = Input::get('lastname');
            $profile->aboutme = Input::get('aboutme');
            $profile->hobby = Input::get('hobby');
            //$profile->email = Input::get('email');

            $profile->facebook = Input::get('facebook');
            $profile->twitter = Input::get('twitter');
            $profile->instagram = Input::get('instagram');

            $profile->save();
            Session::flash('alert-success', 'Profile Telah di update.' );
            return Redirect::to('/profile/'.$objusername);
        }
        else{
            return Redirect::to('/profile/'.$objusername . '/edit')->withInput()->withErrors($v->getMessageBag());
            }
        


        return "hahaha";
    }


}

?>