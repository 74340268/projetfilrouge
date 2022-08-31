<?php

namespace App\Http\Controllers;

use App\Models\Clients;
use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Produits;
use Illuminate\Support\Facades\Auth;

class CommandeController extends Controller
{
    //
    public function viewForm()

    {
        $produit = Produits::all();
       return view('commande.commandeRegister', compact('produit'));
    }

    public function registerCommande(Request $request)
    {

            $user =Auth::User();
            $client = Clients::where('userId', $user->id)->first();
            // dd($client->id);
                    $commande = Commande::create(
                        [
                            'clientId' =>$client->id,
                            'produitId' =>$request['produitId']
                        ]
                    );

                    return redirect('/commande-liste');
                


    }
    public function index()
    {
        //
        $commande = Commande::all();
        return view('commande.index' ,compact('commande')); 
    }

    public function edit($id)
   {
    //
    $commande = Commande::findOrFail($id);
    return view('commande.edit', compact('commande'));



}


}
