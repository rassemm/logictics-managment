<?php

namespace App\Http\Controllers;
use App\Transporteur;
use App\Benne;
use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $transporteurs = Transporteur::all();
        $bennes = Benne::all();
        $users = User::all();
        return view('Dachboard.count',compact('transporteurs','bennes','users'));
    }
}
