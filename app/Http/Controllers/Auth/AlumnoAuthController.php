<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AlumnoAuthController extends Controller
{
    public function showLoginForm(){
        if(Auth::guard('alumno')->check()){
            return redirect()->route('solicitud.create');
        }else{
            return view('usuario.login.login');
        }

    }

    public function login(Request $request){

        $this->validate($request,[
            'correo'=>'required|email',
            'password'=>'required'
        ]);

        if(auth()->guard('alumno')->attempt([
            'correo' => $request->correo,
            'password'=> $request->password,
        ])){
            $alumno = auth()->user();
            return redirect()->route('solicitud.create');
        }else{
            return redirect()->back()->withError(__('auth.failed'));
        }


    }


    public function logout(Request $request){
        Auth::guard('alumno')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('faq.index');
    }
}
