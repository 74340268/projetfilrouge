<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\livraison;
use Illuminate\Http\Request;

class LivraisonsController extends Controller
{
    //
    public function viewForm()

    {
        $commande = Commande::all();
       return view('livraisons.livraisonsRegister', compact('commande'));
    }

    public function registerLivraisons(Request $request)
    {
        $verification = $request->validate(
            [
                'nom_livreur' => ['required', 'string', 'max:100'],
                'prenom_livreur' => ['required', 'string', 'max:150'],
                'date_livraison'=> ['required', 'string', 'max:150'],
               'heure_livraison' => ['required', 'string', 'max:150'],
                 
            ]
            );

           

            if($verification )
            {
            
                    $livraison = livraison::create(
                        [
                            'nom_livreur' => $request['nom_livreur'],
                            'prenom_livreur' => $request['prenom_livreur'],
                            'date_livraison'=> $request['date_livraison'],
                            'heure_livraison' => $request['heure_livraison'],
                            'commandeId' =>$request['commandeId']
                        ]
                    );

                    return redirect('/livraisons-liste'); 
                }


   }
   public function edit($id)
   {
    //
    $livraison = livraison::findOrFail($id);
    return view('livraisons.edit', compact('livraisons'));

   }
   public function update( Request $request, $id)
    {
    //
    $livraison = $request->validate([
        'nom_livreur'=>'required',
        'prenom_livreur' =>'required',
        'date_livraison' =>'required',
        'heure_livraison' =>'required',
        
     ]);
     livraison::whereId($id)->update($livraison);
     return redirect('/livraisons');
    }

    public function show($id)
    {
    //
    $livraison = livraison::findOrFail($id);
    return view('livraisons.show', compact('livraisons'));
    }

    public function destroy($id)
    {
    //
    $livraison = livraison::findOrFail($id);
    $livraison->delete();
    return redirect('/livraisons'); 
    }

    public function index()
    {
    //
    $livraison = livraison::all();
    return view('livraisons.index' ,compact('livraison')); 
    } 
}
