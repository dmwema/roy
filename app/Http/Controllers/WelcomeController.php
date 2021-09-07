<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Fournisseur;
use App\Models\Produit;
use App\Models\Vente;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index () {
        $all_clients = count(Client::all());
        $all_ventes = count(Vente::all());
        $all_produits = count(Produit::all());
        $all_fournisseurs = count(Fournisseur::all());

        $clients_side = Client::all();
        $produits_side = Produit::all();
        $fournisseurs_side = Fournisseur::all();

        return view('welcome', ['all_clients' => $all_clients, 'all_ventes' => $all_ventes, 'all_produits' => $all_produits, 'all_fournisseurs' => $all_fournisseurs, 'clients_side' => $clients_side, 'fournisseurs_side' => $fournisseurs_side, 'produits_side' => $produits_side]);
    }
}
