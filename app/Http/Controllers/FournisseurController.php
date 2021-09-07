<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use Illuminate\Http\Request;

class FournisseurController extends Controller
{
    public function index () {
        $fournisseurs = Fournisseur::all();

        $produits_side = Produit::all();
        $client_side = Client::all();

        return view('fournisseurs.all', ['fournisseurs' => $fournisseurs, 'fournisseurs_side' => $fournisseurs, 'clients_side' => $client_side, 'produits_side' => $produits_side]);
    }

    public function delete (Request $request) {
        $fournisseur = Fournisseur::find($request->id);
        $fournisseur->delete();

        Produit::where('id_fournisseur', $request->id)->delete();
        
        return redirect()->route('fournisseurs.all')->with('danger', 'Enrégistrement supprimé avec succès');
    }

    public function store (Request $request) {
        $fournisseur = new Fournisseur();
        $fournisseur->nom = $request->nom;
        $fournisseur->prenom = $request->prenom;
        $fournisseur->adresse = $request->adresse;

        $fournisseur->save();
        return redirect()->route('fournisseurs.all')->with('success', 'Fournisseur enrégistré avec succès');
    }
}
