<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $credenciais = $request->only('email','password');
        if (Auth::attempt ($credenciais)) {

            $user = User::get()
                ->where('email',$credenciais['email'])
                ->first();

            if (isset($user)) {

                if ($user->type == "Jogador") {
                    /*return redirect()->to(
                        route('perguntas.perguntas', 
                            ['id' => $user->id]));
                    */
                    return view('perguntas.perguntas');

                }else if($user->type == "Administrador"){
                    /*return redirect()->to(
                        route('administrador.pagadm', 
                            ['id' => $user->id]));
                    */
                    return view('administrador.pagadm');
                }
            }

        } else {
            return redirect()->route('redirect.index');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->flush();
        return redirect(\URL::previous());
    }

}
