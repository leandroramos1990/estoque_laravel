<?php namespace estoque\Http\Controllers;

use estoque\Http\Requests;
use estoque\Http\Controllers\Controller;
use Auth;

use Illuminate\Http\Request;

class LoginController extends Controller {

	public function form(){
    return view('form_login');
  }

  public function loginValidate(Request $request){

    $params = $request->only('email','password');

    if(Auth::attempt($params)){
      return 'usuário logado';
    }

    return 'usuário não encontrado!';
    //return view('form_login');
  }

}
