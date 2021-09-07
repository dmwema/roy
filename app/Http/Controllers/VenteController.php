<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Vente;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index () {
        $ventes = Vente::all();

        $clients = [];
        $produits = [];
        $prix = [];

        $clients_side = Client::all();
        $produits_side = Produit::all();
        $fournisseurs_side = Fournisseur::all();

        if (count($ventes) > 0) {
            foreach ($ventes as $vente) {
                $client = Client::find($vente->id_client);
                $produit = Produit::find($vente->id_produit);

                $clients[$vente->id] = $client->nom . ' ' . $client->prenom;
                $produits[$vente->id] =  $produit->code . ' - ' . $produit->nom;
                $prix[$vente->id] = $produit->prix;
            } 
        }
        return view('ventes.all', ['ventes' => $ventes, 'produits' => $produits, 'clients' => $clients, 'prix' => $prix, 'clients_side' => $clients_side, 'produits_side' => $produits_side, 'fournisseurs_side' => $fournisseurs_side]);
    }

    public function delete (Request $request) {
        $vente = Vente::find($request->id)->delete();
        
        return redirect()->route('ventes.all')->with('danger', 'Enrégistrement supprimé avec succès');
    }

    public function store (Request $request) {
        $vente = new Vente();
        $vente->id_client = $request->client;
        $vente->id_produit = $request->produit;
        $vente->qte = $request->qte;

        $produit = Produit::find($request->produit);

        if ($produit->quantite == 0) {
            return redirect()->route('ventes.all')->with('danger', 'Stock epuisé');
        } else if ($request->qte > $produit->quantite) {
            return redirect()->route('ventes.all')->with('danger', 'Il ne reste que ' . $produit->quantite . ' ' . $produit->nom . ' en stock');
        }

        $produit->quantite = $produit->quantite - $request->qte;

        $produit->save();
        $vente->save();
        return redirect()->route('ventes.all')->with('success', 'Vente enrégistrée avec succès');
    }
}
