<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index() {
        $nome = 'Marlon';
        $habitos = ['Correr', 'Jogar bola', 'Jogar videogames'];

        return view('home', [
            'nome' => $nome,
            'habitos' => $habitos
        ]);
    }
}
