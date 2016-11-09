<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agenda;
use App\Contato;
use App\Newsletter;
use Alert;

class WelcomeController extends Controller
{

    public function index()
    {
        $agendas = Agenda::orderBy('data')->whereRaw('data >= curdate()')->paginate(6);
       $contatos = Contato::paginate(6);

        return view('pages.home', compact('agendas', 'contatos'));
    }

    public function getDownload()
    {
        $file= public_path(). "/download/info.zip";

        $headers = array(
                  'Content-Type: application/zip',
                );

        return response()->download($file, 'presskit-mateus-nathan.zip', $headers);
    }

    public function postNews(Request $request)
    {
        $dados = $request->all();
        //dd($dados);
        Newsletter::create($dados);
        Alert::success('Obrigado!')->autoclose(3500);
        return redirect()->back();
        return view('welcome');
    }
}
