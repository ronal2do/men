<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Agenda;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $agendas = Agenda::orderBy('data')->whereRaw('data >= curdate()')->get();
        return view('home', compact('agendas'));
    }


    public function criarAgenda(Request $request)
    {
        $dados = $request->all();
        //dd($dados);

        Agenda::create($dados);
        return redirect()->back();
        return view('home');
    }

    public function deletaAgenda($id)
    {
        $c = Agenda::findOrFail($id);
        $c->delete();
        return redirect()->back();
        return view('home');       
    }
}
