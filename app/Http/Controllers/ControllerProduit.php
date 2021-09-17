<?php

namespace App\Http\Controllers;
use App\Models\Produit;
use App\Models\User;
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
        $produit = ['user','comptable','commercial','directeur','admin'];
        return view('produit')->with('produits',$produit);
    }
    public function ajouterProduit(Request $request, produit $produit)
    {   
        
            $request->all(); 
            
            
            $doc = new produit;
            $doc->nom = $request['nom'];
            $doc->type = $request['type'];
            $doc->profile = $request['profile'];

            $doc->save();
            $produit = DB::table('produit')->get();
            return view('test')->with('produits',$produit);
        
    }
    
    public function getProduit()
    {
        
        $produit = DB::table('produit')->get();
        
        return view('test')->with('produits',$produit);
    }
     
    public function getUser()
    {
        $users = DB::table('users')->get();
        
        return view('droit')->with('users',$users);
    }

    public static function validerDocument( $produit)
    {   
        $doc = DB::table('produit')->where('id',$produit)->update(['valide'=>'1']);
        return view('valider')->with('produits',$doc);
    }
    
}
