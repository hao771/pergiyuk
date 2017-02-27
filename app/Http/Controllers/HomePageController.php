<?php
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\ProductImages;
use App\Models\CartItem;
use App\Models\ProductBrand;
use App\Models\Newsletter;
use DB;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Helper;

class HomePageController extends Controller
{
	public function showHome()
	{

		//check if any user is logged in
		$logged = false;
		$objusername = "";
		
		if(\Auth::check())
		{
			$logged = true;


			$user = \Auth::User();
            $userid = $user->id;
            $strquery = "SELECT u.username as value FROM users u WHERE u.id = ". DB::getPdo()->quote($userid);
            $objusername = Helper::executeScalar($strquery);


            

		}

		return \View::make('index')->with(['logged' => $logged, 'username' => $objusername ]);
	}






}

?>