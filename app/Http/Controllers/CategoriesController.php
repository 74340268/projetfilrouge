<?php

namespace App\Http\Controllers;
use App\Models\Categories;


use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    //
    public function afficher()
    {
        $categories = Categories::all();
    }

    public function viewForm()
    {
       return view('categories.categoriesRegister');
    }

    public function registerCategories(Request $request)
    {
        $verification = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'abreviation' => ['required', 'string', 'max:150'],
                
            ]
            );

            if($verification )
            {
            
                    $categories = Categories::create(
                        [
                            'nom' => $request['nom'],
                            'abreviation' => $request['abreviation'],
                        ]
                    );

                    return redirect('/categories');
                }


        }
        public function edit($id)
        {
        //
        $categories = Categories::findOrFail($id);
        return view('categories.edit', compact('categories'));

        }

        public function update( Request $request, $id)
        {
        //
        $categories = $request->validate([
            'nom'=>'required',
            'abreviation'=>'required',
            
            
        ]);
       Categories::whereId($id)->update($categories);
        return redirect('/categories-liste');
        }
        public function show($id)
        {
        //
        $categories = Categories::findOrFail($id);
        return view('categories.show', compact('categories'));
        }

        public function destroy($id)
        {
        //
        $categories = Categories::findOrFail($id);
        $categories->delete();
        return redirect('/categories'); 
        }

        public function index()
        {
        //
        $categories = Categories::all();
        return view('categories.index' ,compact('categories')); 
        } 
}
