<?php

namespace App\Http\Controllers;
use App\Models\Administrateurs;
use App\Models\User; 

use Illuminate\Http\Request;

class AdministrateursController extends Controller
{
    //
    public function viewForm()
    {
       return view('administrateurs.adminRegister');
    }

    public function dashboard()
    {
        return view('administrateurs.dashboard');
    }

    public function registerAdmin(Request $request)
    {
        
        $verification = $request->validate(
            [
                'nom' => ['required', 'string', 'max:100'],
                'prenom' => ['required', 'string', 'max:150'],
                'telephone' => ['required', 'string', 'max:25'],
                'email' => ['required', 'string', 'max:150'],
                'password' => ['required', 'string', 'min:8', 'max:20', 'confirmed'],
            ]
        );


        if($verification )
                {
                    $user = User::create(
                        [
                        'name' => $request['prenom'],
                        'email' => $request['email'],
                        'password' => bcrypt($request['password']),
                        'statut' => 'administrateur'
                        ]
                    );

                    if($user)
                    {
                        $administrateur = Administrateurs::create(
                            [
                                'nom' => $request['nom'],
                                'prenom' => $request['prenom'],
                                'telephone' => $request['telephone'],
                                'email' => $request['email'],
                                'password'=> bcrypt($request['password']),
                                'userId' =>$user->id, 
                            ]
                        );

                        return redirect('/login'); 
                    }
        }
    }

    public function edit($id)
    {
        //
        $administrateur = Administrateurs::findOrFail($id);
        return view('administrateurs.edit', compact('administrateur'));

    }

    public function update( Request $request, $id)
    {
        //
        $administrateur = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
           
         ]);
         Administrateurs::whereId($id)->update($administrateur);
         return redirect('/admin-liste');
    }

    public function show($id)
    {
        //
        $administrateur = Administrateurs::findOrFail($id);
        return view('administrateurs.show', compact('administrateur'));
    }

    public function destroy($id)
    {
        //
        $administrateur = Administrateurs::findOrFail($id);
        $administrateur->delete();
        return redirect('/administrateurs'); 
    }

    public function index()
    {
        //
        $administrateur = Administrateurs::all();
        return view('administrateurs.index' ,compact('administrateur')); 
    }

    


}
