@php
    $title = "Gestion Vente | clients";
    $active = "client";
    $i = 0;
@endphp
@include('partials.header')
        @include('partials.sidebar')
                    <h4 class="page-title">Clients</h4>
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
                                    <div class="card-title">Tous les clients enrégistrés</div>
                                </div>
                                <div class="card-body">
                                    <div class="card-sub">
                                        {{ count($clients) }} clients enrégistrés
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
                                            @if (count($clients) > 0)
                                            @foreach ($clients as $client)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $client->id }}</td>
                                                <td>{{ $client->nom }}</td>
                                                <td>{{ $client->prenom }}</td>
                                                <td>{{ $client->adresse }}</td>
                                                <td><a onclick="confirm('Etes-vous sûr de vouloir supprimer cet enrégistrement ?')" title="Supprimer" href="{{ route('clients.delete', ['id' => $client->id]) }}" class="btn btn-danger"><i class="la la-trash-o"></i></a></td>
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