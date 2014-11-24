<?php

use Peak\Forms\SignInForm;

class SessionController extends \BaseController {
	private $signInForm;

	public function __construct(SignInForm $signInForm) {
		$this->signInForm = $signInForm;
		$this->beforeFilter('guest', ['except' => 'destroy']);
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /session/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.login');
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /session
	 *
	 * @return Response
	 */
	public function store()
	{
		$formData = Input::only('email', 'password');
		$this->signInForm->validate($formData);

		if ( ! Auth::attempt($formData)) {
			return Redirect::back()->withInput();
		}

		return Redirect::intended('statuses');
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /session/{id}
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();

		return Redirect::to('/');
	}

}
