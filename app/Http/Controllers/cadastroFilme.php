<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastroFilme extends Controller
{
    //
    public function buscaCadastroFilme(){
        return View('cadastroFilme');
    }
}
