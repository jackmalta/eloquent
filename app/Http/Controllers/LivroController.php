<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivroController extends Controller
{
    //
    public function index()
    {
      $livros = Livro::all();
      return view('editora.livros', compact('livros'));
    }
}
