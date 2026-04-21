<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Fonction;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $data=[
            "fonctions"=>Fonction::all(),
            "users"=>User::all()
        ];

      return view('utilisateur', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

        public function connexion(Request $request){

     $request->validate([
            "email"=> "required|email",
            "password"=> "required",
    ]);

    if (Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {

    $request->session()->regenerate();

     return redirect()->route('home');; // 🔥 important
}
    
        return redirect()->route('login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|',
            'password' => 'required|min:8',
            'fonction_id' => 'required'
        ]);

         $result = User::where('email', $request->email)->first();
        if (!$result ) {
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'fonction_id'=>$request->fonction_id
                ]);
            return back()->with('success', 'Utilisateur enregistré avec succès');
        } 
        else {
           
        return back()->with('success', 'Utilisateur existe déja');
    }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
