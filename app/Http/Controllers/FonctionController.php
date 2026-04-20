<?php

namespace App\Http\Controllers;

use App\Models\Fonction;
use Illuminate\Http\Request;

class FonctionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('fonction',$data=["fonction"=>Fonction::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
      $request->validate([
            'fonction' => 'required|string|max:50'
        ]);
            if (!$request->id_fonction) {
                Fonction::create([
                'fonction' => $request->fonction
            ]);
         }
         else {
              $result=Fonction::whereId($request->id_fonction)->first();
              if ($result) {
                $result->fonction=$request->fonction;
                 $result->save();
              }
         }

      

        return back()->with('success', 'Fonction enregistrée avec succès');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fonction $fonction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fonction $fonction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fonction $fonction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fonction $fonction)
    {
        //
    }
}
