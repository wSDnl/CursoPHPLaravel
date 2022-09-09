<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Login(){
        //return redirect()->route('resp.erro'); // REDIRECIONAMENTO DE ROTA
        return view('site.login');
    }
}
