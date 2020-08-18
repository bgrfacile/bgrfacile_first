@extends('layout_admin_G')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <!-- Header -->
            @include('administration_general/fiches/_navigation')
            <!-- Card -->
                <div class="card" data-list='{"valueNames": ["orders-matiere", "orders-nom", "orders-type", "orders-auteur", "orders-status", "orders-date","orders-commentaire"]}'>
                    <div class="card-header">
                        <!-- Search -->
                        <form>
                            <div class="input-group input-group-flush">
                                <div class="input-group-prepend">
                                  <span class="input-group-text">
                                    <i class="fe fe-search"></i>
                                  </span>
                                </div>
                                <input class="form-control list-search" type="search" placeholder="Search">
                            </div>
                        </form>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-nowrap card-table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="custom-control custom-checkbox table-checkbox">
                                        <input type="checkbox" class="list-checkbox-all custom-control-input" name="ordersSelect" id="ordersSelectAll">
                                        <label class="custom-control-label" for="ordersSelectAll">&nbsp;</label>
                                    </div>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-matiere">
                                        matiere
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-nom">
                                        Nom
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-type">
                                        Type
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-auteur">
                                        Auteur
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-status">
                                        Status
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-date">
                                        Date de publication
                                    </a>
                                </th>
                                <th>
                                    <a href="#" class="text-muted list-sort" data-sort="orders-commentaire">
                                        commentaires
                                    </a>
                                </th>
                            </tr>
                            </thead>

                            <tbody class="list">
                            <tr>
                                <td>
                                    <div class="custom-control custom-checkbox table-checkbox">
                                        <input type="checkbox" class="list-checkbox custom-control-input" name="ordersSelect" id="ordersSelectOne">
                                        <label class="custom-control-label" for="ordersSelectOne">&nbsp;</label>
                                    </div>
                                </td>
                                <td class="orders-matiere ">
                                    <span class="badge badge-soft-primary ml-1 mt-n1">
                                        robotique
                                    </span>
                                </td>
                                <td class="orders-nom">
                                    robotique pour les nuls
                                </td>
                                <td class="orders-type">
                                    <i class="fe fe-headphones"></i>
                                    audio
                                </td>
                                <td class="orders-auteur">
                                    bgrfacile.com
                                </td>
                                <td class="orders-status">
                                    <div class="badge badge-soft-success">
                                        en ligne
                                    </div>
                                </td>
                                <td class="orders-date">
                                    <time datetime="2018-07-30">07/30/18</time>
                                </td>
                                <td class="orders-commentaire">
                                    <i class="fe fe-message-square"></i>
                                    18
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div> <!-- / .row -->
    </div>
@endsection
