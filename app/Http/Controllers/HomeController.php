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
        return view('home');
    }
    public function criarAgenda(Request $request)
    {
        $dados = $request->all();
        //dd($dados);

        Agenda::create($dados);

        return view('home');
    }
    
    public function getDownload()
    {
        $file= public_path(). "/download/info.zip";

        $headers = array(
                  'Content-Type: application/zip',
                );

        return response()->download($file, 'presskit-mateus-nathan.zip', $headers);
    }
}
