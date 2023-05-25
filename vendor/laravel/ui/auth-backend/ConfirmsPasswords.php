<?php

namespace Illuminate\Foundation\Auth;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait ConfirmsPasswords
{
    use RedirectsUsers;

    /**
     * Display the password confirmation view.
     *
     * @return \Illuminate\View\View
     */
    public function showConfirmForm()
    {
        return view('auth.passwords.confirm');
    }

    /**
     * Confirm the given user's password.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function confirm(Request $request)
    {
        $request->validate($this->rules(), $this->validationErrorMessages());

        $this->resetPasswordConfirmationTimeout($request);

        return $request->wantsJson()
                    ? new JsonResponse([], 204)
                    : redirect()->intended($this->redirectPath());
    }

    /**
     * Reset the password confirmation timeout.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    protected function resetPasswordConfirmationTimeout(Request $request)
    {
        $request->session()->put('auth.password_confirmed_at', time());
    }

    /**
     * Get the password confirmation validation rules.
     *
     * @return array
     */
    protected function rules()
    {
        return [
            'email' => 'required',
          //  'password' => 'required|current_password:web',
            'password' => 'required||required_with:password_confirmation|same:password_confirmation|min:8|max:20|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]/',
            'password_confirmation'=> 'required'
        ];
    }
    protected function validationErrorMessages(){
        return [
            'email.*' => 'Se require un correo',
            'password.required' => 'Se require una contraseña',
            'password.min' => 'Minimo 8 caracteres',
            'password.max' => 'Máximo 20 caracteres',
            'password.regex' => 'Agrega mayúsculas, minúsculas y números',
        ];
    }

    /**
     * Get the password confirmation validation error messages.
     *
     * @return array
     */

}
