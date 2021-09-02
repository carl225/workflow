<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

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
        
            $request->all(); 
            
            
            $produit = new produit;
            $produit->nom = $request['nom'];
            $produit->type = $request['type'];
            
            $produit->save();
            return view('test')->with('noms',"success");
        
    } 
    public function getProduit()
    {
        $produit = DB::table('produit')->get();
        
        return view('test')->with('produits',$produit);
    }

    public function validerDocument(Request $request, produit $produit)
    {   
        $request->all(); 
        $produit = new produit;
        $produit->nom = $request['nom'];
        $produit->type = $request['type'];
        return view('test')->with('produits',$produit);
    }
    
}
