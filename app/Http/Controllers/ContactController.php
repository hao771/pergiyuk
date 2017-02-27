<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use DB;
use Helper;

class ContactController extends Controller
{
	
	public function showContactForm()
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
		return \View::make('company.contact')->with(['logged' => $logged, 'username' => $objusername]);
	}


	public function sendEmail(){
		$name = Input::get('name');
		$email = Input::get('email');
		$description = Input::get('description');

		//send email here
		$to = 'antoni.tiosaki@gmail.com';
		$email_subject = "Website Contact Form:  $name";

		$email_body = "You have received a new request from your contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$description";

		$headers = "From: noreply@gmail.com";
		$headers .= "Reply-To: " . $email;	

		mail($to, $email_subject, $email_body, $headers);

		Session::flash('alert-success', 'Terima kasih, Pesan anda telah terkirim.' );

		return Redirect::to('/contactus');
	}


}

?>