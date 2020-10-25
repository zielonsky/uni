<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController1 extends Controller
{
    function index(Request $req)
    {
      // echo "Kontroller";
      // return $req->input();
      // return $req->path();
      // return $req->url();
      // return $req->method();
      // return $req->input();


      $req->validate(
        [

          'address' => 'required|email',
          'surname' => 'required|min:2',

        ],

        [
          'address.required' => 'Wymagany e-mail',
          'surname.required' => 'Wymagane nazwisko',
          'address.email' => 'Niepoprawny adres e-mail',
          'surname.min' => 'Wymagane jest minimum 2 znaki'
        ]
      );
    }

}
