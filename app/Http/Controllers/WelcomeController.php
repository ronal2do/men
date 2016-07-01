<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Agenda;

class WelcomeController extends Controller
{

    public function index()
    {
    	$agendas = Agenda::orderBy('data')->whereRaw('data >= curdate()')->paginate(6);

        return view('pages.home', compact('agendas'));
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
