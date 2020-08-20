@extends('layout_admin_G')

@section('content')
    <!-- HEADER -->
    @include('administration_general/profil/_navigation')
    <!-- CONTENT -->
    <div class="card bg-transparent">
        <div class="card-body text-center">
            <h3>Les parametres de l'application</h3>
            <p class="text-muted">
                Sera disposez ici les differents parametres de l'applications
            </p>
            <a href="#" class="btn btn-outline-secondary">
                Contactez-nous
            </a>

        </div>
    </div>
@endsection
