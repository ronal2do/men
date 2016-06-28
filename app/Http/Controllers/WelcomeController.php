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
    
}
