<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Produits;

use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    //
    public function viewForm()

    {
        $categorie = Categories::all();
       return view('produits.produitsRegister', compact('categorie'));
    }

    public function registerProduits(Request $request)
    {
        $verification = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prix' => ['required', 'string', 'max:150'],
                'image' => ['required', 'string', 'max:150'],
                
                
            ]
            );

           

            if($verification )
            {
            
                    $produits = Produits::create(
                        [
                            'nom' => $request['nom'],
                            'prix' => $request['prix'],
                            'image' => $request['image'],
                            'categorieId' =>$request['categorieId']
                        ]
                    );

                    return redirect('/produits-liste');
                }


   }
   public function edit($id)
   {
    //
    $produits = Produits::findOrFail($id);
    return view('produits.edit', compact('produits'));

   }

    public function update( Request $request, $id)
    {
    //
    $produits = $request->validate([
        'nom'=>'required',
        'prix'=>'required',
        'image'=>'required',
        
     ]);
     Produits::whereId($id)->update($produits);
     return redirect('/produits-liste');
    }

    public function show($id)
    {
    //
    $produits = Produits::findOrFail($id);
    return view('produits.show', compact('produits'));
    }

    public function destroy($id)
    {
    //
    $produits = Produits::findOrFail($id);
    $produits->delete();
    return redirect('/produits'); 
    }

    public function index()
    {
    //
    $produits = Produits::all();
    return view('produits.index' ,compact('produits')); 
    } 
}
