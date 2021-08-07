<?php

namespace App\Http\Controllers;
use App\Models\produit;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;

class ControllerProduit extends Controller
{
    public function update(Request $request, produit $produit)
    {
        if (! Gate::allows('update-produit', $produit)) {
            abort(403);
        }
    }
    public function ajouter()
    {
        return view('produit');
    }
    public function ajouterProduit(Request $request, produit $produit)
    {   
        if (!Gate::forUser($user)->allows('ajouterProduit', $produit)) {
            dd($request->all()); 
            $someName = $request->nom;
            return view('test')->with('noms',$someName);
        }
       
    } 
    
}
