<?php

namespace App\Http\Controllers;

use App\Models\Administrateurs;
use App\Models\Clients;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       
        $user = Auth::user();
        
        if($user->statut == 'administrateur')
        {
            $administrateur = Administrateurs::Where('userId', $user->id)->first();
            return view('administrateurs.dashboard', compact('administrateur'));
        }

        elseif($user->statut == 'clients')
        {
            $client = Clients::Where('userId', $user->id)->first();

            return view('clients.dashboard',compact('client'));
        }
        else{
            return view('home');
        }
            
    }
}
    