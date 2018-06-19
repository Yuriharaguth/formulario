<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CadastroRequest;
use App\cadastro;
use App\convite;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function store(CadastroRequest $request)
    {
            $user = DB::table('cadastros')
                ->where('convite', $request->input('convite'))
                ->where('mesa', $request->input('mesa'))
                ->first();
            if ($user) {
                return view('erro');
            }
            $cadastro = cadastro::create($request->all());
            return view('sucesso', compact('cadastro'));


    }

}
