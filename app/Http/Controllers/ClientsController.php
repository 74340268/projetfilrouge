<?php

namespace App\Http\Controllers;
use App\Models\Clients;
use App\Models\User;

use Illuminate\Http\Request;

class ClientsController extends Controller
{
    //
    public function viewForm()
    {
       return view('clients.clientsRegister');
    }

    public function dashboard()
    {
        return view('clients.dashboard');
    }

    public function registerClients(Request $request)
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
                        'statut' => 'clients'
                        ]
                    );

                    if($user)
                    {
                        $clients = Clients::create(
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
        $clients = Clients::findOrFail($id);
        return view('clients.edit', compact('clients'));

    }

    public function update( Request $request, $id)
    {
        //
        $clients = $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'email'=>'required',
            'password'=>'required',
         ]);
         Clients::whereId($id)->update($clients);
         return redirect('/clients-liste');
    }

    public function show($id)
    {
        //
        $clients = Clients::findOrFail($id);
        return view('clients.show', compact('clients'));
    }

    public function destroy($id)
    {
        //
        $clients = Clients::findOrFail($id);
        $clients->delete();
        return redirect('/clients'); 
    }

    public function index()
    {
        //
        $clients = Clients::all();
        return view('clients.index' ,compact('clients')); 
    }


}

