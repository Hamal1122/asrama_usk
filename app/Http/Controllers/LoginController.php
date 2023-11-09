<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use function Laravel\Prompts\password;

class LoginController extends Controller
{
  public function index(){
    return view('Login');
  }

  public function loginproses(Request $request){
    if(Auth::attempt($request->only('email', 'password'))){
        return redirect('/beranda');
    }

  }
  
};