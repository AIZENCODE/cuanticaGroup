<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {

        if (Auth::check()) {
            return redirect('/');
        }
        return view('client.sesion');
    }
    public function login(LoginRequest $request)
    {

        
        $credentials = $request->all('email','password');
        //  return $credentials;
         if (!Auth::validate($credentials)) {
             return redirect()->to('sesion')->with('info','Correo y/o contraseña');
         }

         $user = Auth::getProvider()->retrieveByCredentials($credentials);

         Auth::login($user);

        return $this->authenticated($request, $user);
    }


    public function authenticated(Request $request, $user)
    {
         return redirect('/');

    }
}
