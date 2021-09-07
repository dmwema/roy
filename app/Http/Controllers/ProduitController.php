<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Vente;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index () {
        $produits = Produit::all();
        $fournisseurs = [];

        if (count($produits) > 0) {
            foreach ($produits as $produit) {
                $fournisseur = Fournisseur::find($produit->id_fournisseur);
                $fournisseurs[$produit->id] = $fournisseur->nom . ' ' . $fournisseur->nom;
            }
        }

        $clients_side = Client::all();
        $fournisseurs_side = Fournisseur::all();

        return view('produits.all', ['produits' => $produits, 'produits_side' => $produits, 'fournisseurs' => $fournisseurs, 'clients_side' => $clients_side, 'fournisseurs_side' => $fournisseurs_side]);
    }

    public function delete (Request $request) {
        $produit = Produit::find($request->id);
        $produit->delete();
        
        Vente::where('id_produit', $produit->id)->delete();
        
        return redirect()->route('produits.all')->with('danger', 'Enrégistrement supprimé avec succès');
    }

    public function store (Request $request) {
        $produit = new Produit();
        $produit->nom = $request->nom;
        $produit->code = $request->code;
        $produit->prix = $request->prix;
        $produit->quantite = $request->quantite;
        $produit->id_fournisseur = $request->fournisseur;

        $produit->save();
        return redirect()->route('produits.all')->with('success', 'Produit enrégistrée avec succès');
    }
}
