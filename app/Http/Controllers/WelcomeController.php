<?php namespace App\Http\Controllers;

use App\Http\Requests\PrepareContactRequest;
//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
		//$this->middleware('auth');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//$video = array('url' => 'https://www.youtube.com/watch?v=s4nbCNQvzww');
		$view_url="https://www.youtube.com/watch?v=7RRz8dU1m3Q";
		$view_url = str_replace("watch?v=", "v/", $view_url);
		//$view_url = "https://www.youtube.com/watch?v=7RRz8dU1m3Q"  + "&output=embed";
		return view('welcome', compact('view_url'));
	}

	public function contact(Request $request)
	{
		//Request::input('email');
		/*Mail::raw(Request::input('message'), function($message)
		{
		    $message->from(Request::input('email'), Request::input('name'));
		    $message->subject('General Inquiry from '.Request::input('name'));
		    $message->to(env('MAIL_TO',null));		   
		});*/		
		//\Session::flash('flash_message', 'Thank you for your inquiery. We will get back to you soon.');)
		flash()->overlay('Thank you for your inquiery. We will get back to you soon.', 'Thank You!');
		return Redirect::to('/');
		//return Redirect::to('/')->withInput()->with('success', 'Thank you for your inquiery. We will get back to you soon.');

		//dd($request->input('name'));
		//dd(Request::all());
	}

}
