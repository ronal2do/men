<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Agenda;
use App\Contato;
use App\Newsletter;

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
        $contatos = Contato::get();
        $newsletters = Newsletter::get();
        return view('home', compact('agendas', 'contatos', 'newsletters'));
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
     public function criarContato(Request $request)
    {
        $dados = $request->all();
        //dd($dados);

        Contato::create($dados);
        return redirect()->back();
        return view('home');
    }

    public function deletaContato($id)
    {
        $c = Contato::findOrFail($id);
        $c->delete();
        return redirect()->back();
        return view('home');       
    }
    public function deletaNewsletter($id)
    {
        $n = Newsletter::findOrFail($id);
        $n->delete();
        return redirect()->back();
        return view('home');       
    }
}
