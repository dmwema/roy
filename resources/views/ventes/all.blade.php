@php
    $title = "Gestion Vente | Ventes";
    $active = "vente";
    $i = 0;
@endphp
@include('partials.header')
        @include('partials.sidebar')
                    <h4 class="page-title">Ventes</h4>
                    @if(Session::has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('success') }}</strong>
                        <button style="background: none; margin-top: -13px; margin-right: 5px" type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif   
                    @if(Session::has('danger'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ Session::get('danger') }}</strong>
                        <button style="background: none; margin-top: -13px; margin-right: 5px" type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif   
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Toutes les ventes realisées</div>
                                </div>
                                <div class="card-body">
                                    <div class="card-sub">
                                        {{ count($ventes) }} Ventes effectuées
                                    </div>
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Client</th>
                                                <th scope="col">Produit</th>
                                                <th scope="col">Prix (Fc)</th>
                                                <th scope="col">Qte</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($ventes) > 0)
                                            @foreach ($ventes as $vente)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $clients[$vente->id] }}</td>
                                                <td>{{ $produits[$vente->id] }}</td>
                                                <td>{{ $prix[$vente->id] }}</td>
                                                <td>{{ $vente->qte }}</td>
                                                <td>{{ $prix[$vente->id] * $vente->qte }}</td>
                                                <td><a onclick="confirm('Etes-vous sûr de vouloir supprimer cet enrégistrement ?')" title="Supprimer" href="{{ route('ventes.delete', ['id' => $vente->id]) }}" class="btn btn-danger"><i class="la la-trash-o"></i></a></td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.modals')
@include('partials.footer')