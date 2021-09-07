
                    <!-- Modal -->
                    <div class="modal fade" id="addVente" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <form action="{{ route('ventes.new') }}" method="POST">
                                        @csrf
                                    <div class="modal-header bg-primary">
                                        <h6 class="modal-title"><i class="la la-bar-chart-o"></i>Enrégistrer une vente</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        
                                    <div>
                                        <div class="card">
                                            <div class="card-body" style="text-align: left">
                                                <div class="form-group">
                                                    <label for="squareSelect">Produit à vendre</label>
                                                    <select class="form-control input-square" name="produit" id="squareSelect">
                                                        @if (count($produits_side) > 0)
                                                            @foreach ($produits_side as $produit)
                                                            <option value="{{ $produit->id }}">{{ $produit->code . ' - ' . $produit->nom }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="squareSelect">Quantité</label>
                                                    <input type="text" name="qte" class="form-control input-square" id="squareInput">
                                                </div>	
                                                <div class="form-group">
                                                    <label for="squareSelect">Client</label>
                                                    <select class="form-control input-square" name="client" id="squareSelect">
                                                        @if (count($clients_side) > 0)
                                                            @foreach ($clients_side as $client)
                                                            <option value="{{ $client->id }}">{{ $client->prenom . ' ' . $client->nom }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>									
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success">Enrégistrer</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                                </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addClient" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{ route('clients.new') }}" method="POST">
                                    @csrf
                                    <div class="modal-header bg-primary">
                                        <h6 class="modal-title"><i class="la la-user-o"></i>Enrégistrer un client</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        
                                    <div>
                                        <div class="card">
                                            <div class="card-body" style="text-align: left">
                                                <div class="form-group">
                                                    <label for="squareInput">Prenom</label>
                                                    <input type="text" name="prenom" class="form-control input-square" id="squareInput">
                                                </div>
                                                <div class="form-group">
                                                    <label for="squareSelect">Nom</label>
                                                    <input type="text" name="nom" class="form-control input-square" id="squareInput">
                                                </div>	
                                                <div class="form-group">
                                                    <label for="squareSelect">Adresse</label>
                                                    <input name="adresse" type="text" class="form-control input-square" id="squareInput">
                                                </div>									
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success">Enrégistrer</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addFss" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{ route('fournisseurs.new') }}" method="POST">
                                    @csrf
                                    <div class="modal-header bg-primary">
                                        <h6 class="modal-title"><i class="la la-user-o"></i>Enrégistrer un fournisseur</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                        
                                    <div>
                                        <div class="card">
                                            <div class="card-body" style="text-align: left">
                                                <div class="form-group">
                                                    <label for="squareInput">Prenom</label>
                                                    <input type="text" name="prenom" class="form-control input-square" id="squareInput">
                                                </div>
                                                <div class="form-group">
                                                    <label for="squareSelect">Nom</label>
                                                    <input type="text" name="nom" class="form-control input-square" id="squareInput">
                                                </div>	
                                                <div class="form-group">
                                                    <label for="squareSelect">Adresse</label>
                                                    <input type="text" name="adresse" class="form-control input-square" id="squareInput">
                                                </div>									
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success">Enrégistrer</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="addProd" tabindex="-1" role="dialog" aria-labelledby="modalUpdatePro" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <form action="{{ route('produits.new') }}" method="POST">
                                    @csrf
                                    <div class="modal-header bg-primary">
                                        <h6 class="modal-title"><i class="la la-user-o"></i>Enrégistrer un produit</h6>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body text-center">
                                    <div>
                                        <div class="card">
                                            <div class="card-body" style="text-align: left">
                                                <div class="form-group">
                                                    <label for="squareInput">Code</label>
                                                    <input type="text" name="code" class="form-control input-square" id="squareInput">
                                                </div>
                                                <div class="form-group">
                                                    <label for="squareSelect">Nom</label>
                                                    <input type="text" name="nom" class="form-control input-square" id="squareInput">
                                                </div>	
                                                <div class="form-group">
                                                    <label for="squareSelect">Prix</label>
                                                    <input type="text" name="prix" class="form-control input-square" id="squareInput">
                                                </div>	
                                                <div class="form-group">
                                                    <label for="squareSelect">Qte</label>
                                                    <input type="text" name="quantite" class="form-control input-square" id="squareInput">
                                                </div>
                                                <div class="form-group">
                                                    <label for="squareSelect">Fournisseur</label>
                                                    <select name="fournisseur" class="form-control input-square" id="squareSelect">
                                                        @if (count($fournisseurs_side) > 0)
                                                            @foreach ($fournisseurs_side as $fournisseur)
                                                            <option value="{{ $fournisseur->id }}">{{ $fournisseur->prenom . ' ' . $fournisseur->nom }}</option>
                                                            @endforeach
                                                        @endif
                                                    </select>
                                                </div>									
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-success">Enrégistrer</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>