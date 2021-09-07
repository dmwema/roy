@php
    $title = "Gestion Vente | Fournisseurs";
    $active = "fournisseur";
    $i = 0;
@endphp
@include('partials.header')
        @include('partials.sidebar')
                    <h4 class="page-title">fournisseurs</h4>
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
                                    <div class="card-title">Tous les fournisseurs enrégistrés</div>
                                </div>
                                <div class="card-body">
                                    <div class="card-sub">
                                        {{ count($fournisseurs) }} fournisseurs enrégistrés
                                    </div>
                                    <table class="table mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Code</th>
                                                <th scope="col">nom</th>
                                                <th scope="col">prenom</th>
                                                <th scope="col">adresse</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($fournisseurs) > 0)
                                            @foreach ($fournisseurs as $fournisseur)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $fournisseur->id }}</td>
                                                <td>{{ $fournisseur->nom }}</td>
                                                <td>{{ $fournisseur->prenom }}</td>
                                                <td>{{ $fournisseur->adresse }}</td>
                                                <td><a onclick="confirm('Etes-vous sûr de vouloir supprimer cet enrégistrement ?')" title="Supprimer" href="{{ route('fournisseurs.delete', ['id' => $fournisseur->id]) }}" class="btn btn-danger"><i class="la la-trash-o"></i></a></td>
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