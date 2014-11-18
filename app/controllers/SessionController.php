<?php

use Peak\Forms\SignInForm;

class SessionController extends \BaseController {
	private $signInForm;

	public function __construct(SignInForm $signInForm) {
		$this->signInForm = $signInForm;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /session/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('sessions.create');
	}


	/**
	 * Store a newly created resource in storage.
	 * POST /session
	 *
	 * @return Response
	 */
	public function store()
	{
		$formData = Input::only('email', 'password', 'name');
		$this->signInForm->validate($formData);

		return 'winter is coming';
	}


	/**
	 * Remove the specified resource from storage.
	 * DELETE /session/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
