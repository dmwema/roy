<div class="sidebar">
    <div class="scrollbar-inner sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item {{ $active == "home" ? 'active': '' }}">
                <a href="/">
                    <i class="la la-dashboard"></i>
                    <p>Review</p>
                </a>
            </li>
            <li class="nav-item {{ $active == 'vente' ? 'active': '' }}">
                <a href="{{ route('ventes.all') }}">
                    <i class="la la-table"></i>
                    <p>Ventes</p>
                </a>
            </li>
            <li class="nav-item {{ $active == 'client' ? 'active': '' }}">
                <a href="{{ route('clients.all') }}">
                    <i class="la la-keyboard-o"></i>
                    <p>Clients</p>
                </a>
            </li>
            <li class="nav-item {{ $active == 'fournisseur' ? 'active': '' }}">
                <a href="{{ route('fournisseurs.all') }}">
                    <i class="la la-th"></i>
                    <p>Fournisseurs</p>
                </a>
            </li>
            <li class="nav-item {{ $active == 'produit' ? 'active': '' }}">
                <a href="{{ route('produits.all') }}">
                    <i class="la la-fonticons"></i>
                    <p>Produits</p>
                </a>
            </li>
            <li class="nav-item update-pro">
                <button data-toggle="modal" style="background-color: green;" data-target="#addVente">
                        <i class="la la-plus"></i>
                        <p>Vente</p>
                </button>
            </li>
            <li class="nav-item update-pro">
                <button data-toggle="modal" data-target="#addClient">
                        <i class="la la-plus"></i>
                        <p>Client</p>
                </button>
            </li>
            <li class="nav-item update-pro">
                <button data-toggle="modal" data-target="#addFss">
                        <i class="la la-plus"></i>
                        <p>Fournisseur</p>
                </button>
            </li>
            <li class="nav-item update-pro">
                <button data-toggle="modal" data-target="#addProd">
                        <i class="la la-plus"></i>
                        <p>Produit</p>
                </button>
            </li>
        </ul>
    </div>
</div>
<div class="main-panel">
    <div class="content">
        <div class="container-fluid">