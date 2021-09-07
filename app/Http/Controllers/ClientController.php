<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Vente;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index () {
        $clients = Client::all();

        $produits_side = Produit::all();
        $fournisseurs_side = Fournisseur::all();

        return view('clients.all', ['clients' => $clients, 'produits_side' => $produits_side, 'clients_side' => $clients, 'fournisseurs_side' => $fournisseurs_side]);
    }

    public function delete (Request $request) {
        $client = Client::find($request->id);
        $client->delete();

        Vente::where('id_client', $request->id)->delete();
        
        return redirect()->route('clients.all')->with('danger', 'Enrégistrement supprimé avec succès');
    }

    public function store (Request $request) {
        $client = new Client();
        $client->nom = $request->nom;
        $client->prenom = $request->prenom;
        $client->adresse = $request->adresse;

        $client->save();
        return redirect()->route('clients.all')->with('success', 'Client enrégistré avec succès');
    }
}
