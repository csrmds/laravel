<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    //
	public function index() {

		$contatos=[
			["nome"=>"Cesar","contato"=>"csrmds"],
			["nome"=>"karla","contato"=>"karlinha"],
			["nome"=>"Angela","contato"=>"a5511"],
			["nome"=>"Maria","contato"=>"jojo"]
		];

		return view('contato.index', compact('contatos'));
	}

	public function criar(Request $req) {
		dd($req['nome']);
		return "metódo CRIAR do contato controller";
		
	}

	public function editar(Request $req) {
		dd($req->all());
		return "metódo EDITAR do contato controller";
		
	}
}
