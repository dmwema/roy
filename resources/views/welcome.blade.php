@php
    $title = "Gestion Vente | Accueil";
    $active = "home";
@endphp
@include('partials.header')
        @include('partials.sidebar')
                    <h4 class="page-title">Tableau de bord</h4>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card card-stats card-warning">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-users"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Clients</p>
                                                <h4 class="card-title">{{ $all_clients }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats card-success">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-bar-chart"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Ventes</p>
                                                <h4 class="card-title">{{ $all_ventes }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats card-danger">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-newspaper-o"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Fournisseurs</p>
                                                <h4 class="card-title">{{ $all_fournisseurs }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card card-stats card-primary">
                                <div class="card-body ">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="icon-big text-center">
                                                <i class="la la-check-circle"></i>
                                            </div>
                                        </div>
                                        <div class="col-7 d-flex align-items-center">
                                            <div class="numbers">
                                                <p class="card-category">Produits</p>
                                                <h4 class="card-title">{{ $all_produits }}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vente annuelle</h4>
                                    <p class="card-category">Complet</p>
                                </div>
                                <div class="card-body">
                                    <div id="task-complete" class="chart-circle mt-4 mb-3"></div>
                                </div>
                                <div class="card-footer">
                                    <div class="legend"><i class="la la-circle text-primary"></i> Complete</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Succurssales</h4>
                                    <p class="card-category">
                                        Les pays dans le quel nous nous trouvons</p>
                                </div>
                                <div class="card-body">
                                    <div class="mapcontainer">
                                        <div class="map">
                                            <span>Alternative content for the map</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('partials.modals')
@include('partials.footer')