<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\paiement;
use Illuminate\Http\Request;

class PaiementsController extends Controller
{
    //
    public function viewForm()

    {
        $commande = Commande::all();
       return view('paiements.paiementsRegister', compact('commande'));
    }

    public function registerPaiements(Request $request)
    {
        $verification = $request->validate(
            [
                'date_paiement' => ['required', 'string', 'max:100'],
                'moyen_paiement' => ['required', 'string', 'max:150'],
                
                
                
            ]
            );

           

            if($verification )
            {
            
                    $paiements = paiement::create(
                        [
                            'date_paiement' => $request['date_paiement'],
                            'moyen_paiement' => $request['moyen_paiement'],
                            'commandeId' =>$request['commandeId']
                        ]
                    );

                    return redirect('/paiements-liste'); 
                }


   }
   public function edit($id)
   {
    //
    $paiements = paiement::findOrFail($id);
    return view('paiements.edit', compact('paiements'));

   }
   public function update( Request $request, $id)
    {
    //
    $paiements = $request->validate([
        'date_paiement'=>'required',
        'moyen_paiement'=>'required',
       
        
     ]);
     paiement::whereId($id)->update($paiements);
     return redirect('/paiements');
    }

    public function show($id)
    {
    //
    $paiements = paiement::findOrFail($id);
    return view('paiements.show', compact('paiements'));
    }

    public function destroy($id)
    {
    //
    $paiements = paiement::findOrFail($id);
    $paiements->delete();
    return redirect('/paiements'); 
    }

    public function index()
    {
    //
    $paiements = paiement::all();
    return view('paiements.index' ,compact('paiements')); 
    } 
}
