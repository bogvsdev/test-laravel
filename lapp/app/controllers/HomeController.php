<?php

class HomeController extends BaseController {
	/**
	 * Index Action
	 * @return view Opens index page view
	 */
	public function index(){
		return View::make('index');
	}
	/**
	 * Form Action
	 * @return view || error data Validates data, saves to db and sends email
	 */
	public function form(){	
		$data = Input::all();
		$rules = array(
			'name'=>'required',
			'email'=>'required|email',
			'body'=>'required',
		);
		$validator = Validator::make($data, $rules);
		if($validator->fails()) {
			return Redirect::to('/')->withErrors($validator)->withInput();
		}
		//Saving to DB
		$table = new Message;
		$table->name = $data['name'];
		$table->email = $data['email'];
		$table->body = $data['body'];
		$table->save();
		
		//Sending email
		$emailcontent = array (
			'name'=>$data['name'],
			'body'=>$data['body'],
		);
		$email = $data['email'];
		Mail::send('emails.form', $emailcontent, function($message) use ($email){
			$message->to($email,'Best site ever')->subject('Best site ever sent a message to you!');
		});

		return Redirect::to('thankyou');
	}
	/**
	 * Thankyou Action
	 * @return view Shows thank you page
	 */
	public function thankyou(){
		return View::make('thankyou');
	}

}
