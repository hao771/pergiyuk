<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Helper;

class ArticleController extends Controller
{
	

    public function add()
    {
        $logged = false;
        if(\Auth::check())
        {

            //GET USERNAME
            $user = \Auth::User();
            $userid = $user->id;

            $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid); 
            $objusername = Helper::executeScalar($strquery);

            $logged = true;
        }
        
        //$article = new Article();
        return \View::make('article.articleformview')->with(['logged' => $logged, 'username' => $objusername]);
    }





}

?>