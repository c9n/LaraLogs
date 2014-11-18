<?php namespace Peak\Forms;

use Laracasts\Validation\FormValidator;

class SignInForm extends FormValidator {
    /**
     * Validation rules for the sign in form.
     *
     * @var array
     */
    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required|min:6|alpha_num',
        'name' => 'required'
    ];
}