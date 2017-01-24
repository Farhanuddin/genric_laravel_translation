<?php namespace App\Http\Controllers;

use Stichoza\GoogleTranslate\TranslateClient;

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
	}

	public function translation(){

		$trans_client = new TranslateClient();
		dd($trans_client->getAllLang());
		$trans_client->setSource('en'); //Language to be Translated
		$trans_client->setTarget('ka'); // Language that will be translated toos
		
		//Doing Translation of Selected Text
		echo $trans_client->translate('Hello World!');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{		$trans_client = new TranslateClient();
		    $langs = $trans_client->getAllLang();
		   // dd($langs);
		    return view('translate.index')->with('langs', $langs);
	}

	public function translate_post(Request $request){
		return $request->input();
	}

}
