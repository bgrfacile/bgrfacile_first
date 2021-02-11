@extends('layouts.dashboardAdmin')
@section('title')
    équipe
@endsection

@section('contenue')
    <div class="card mb-3">
        <div class="card-header">
            <div class="row flex-between-center">
                <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                    <h5 class="fs-0 mb-0 text-nowrap py-2 py-xl-0">Notre équipe (0)</h5>
                </div>
                <div class="col-8 col-sm-auto text-right pl-2">

                    <div id="table-customers-replace-element">
                        <button class="btn btn-falcon-default btn-sm" type="button" data-toggle="modal"
                                data-target="#ajout-equipe">
                            <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                            Nouveau
                        </button>
                        {{--                    La modal--}}
                        <div class="modal fade" id="ajout-equipe" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">crée un nouveau membre de
                                            l'équipe</h5>
                                        <button type="button" class="btn-close" data-dismiss="modal"
                                                aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('team.store') }}" method="post"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="p-4 pb-0">
                                                <div class="mb-3">
                                                    <label class="col-form-label"
                                                           for="recipient-name">
                                                        nom complet
                                                    </label>
                                                    <input name="name" class="form-control" id="recipient-name"
                                                           type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="col-form-label"
                                                           for="image">
                                                        image du membre
                                                    </label>
                                                    <div class="form-file">
                                                        <input name="image" class="form-file-input" id="image"
                                                               type="file"/>
                                                        <label class="form-file-label" for="customFile">
                                                            <span class="form-file-text">Choose file...</span><span
                                                                    class="form-file-button">Browse</span>
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="diplome" class="col-form-label">Fonction</label>
                                                    <input name="role" class="form-control" id="diplome"
                                                           type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="facebook" class="col-form-label">lien facebook</label>
                                                    <input name="link_facebook" class="form-control" id="facebook"
                                                           type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="twitter" class="col-form-label">lien twitter</label>
                                                    <input name="link_twitter" class="form-control" id="twitter"
                                                           type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="whatsaap" class="col-form-label">lien whatsaap</label>
                                                    <input name="link_whatsaap" class="form-control" id="whatsaap"
                                                           type="text">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="linkedin" class="col-form-label">lien linkedin</label>
                                                    <input name="link_linkedin" class="form-control" id="linkedin"
                                                           type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer
                                            </button>
                                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body bg-light p-0">
                <div class="row g-0 text-center fs--1">
                    @foreach($teams as $team)
                        <div class="col-6 col-md-4">
                            <div class="bg-white p-3 h-100">
                                <div>
                                    <img
                                            class="img-thumbnail img-fluid rounded-circle mb-3 shadow-sm"
                                            src="{{ $team->imagePath }}" alt="" width="100"/>
                                </div>
                                <h6 class="mb-1"><span>{{ $team->nom }}</span></h6>
                                <div class="fs--2 mb-1">
                                    <button class="btn btn-outline-dark" type="button" data-toggle="modal"
                                            data-target="#modif-equipe-{{$team->id}}">modifier
                                    </button>
                                    {{--                    La modal--}}
                                    <div class="modal fade" id="modif-equipe-{{$team->id}}" tabindex="-1" role="dialog"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Modification
                                                        de {{$team->nom}}</h5>
                                                    <button type="button" class="btn-close" data-dismiss="modal"
                                                            aria-label="Close"></button>
                                                </div>
                                                <form action="{{ route('team.update',['id'=>$team->id]) }}"
                                                      method="post"
                                                      enctype="multipart/form-data">
                                                    @csrf
                                                    @method('put')
                                                    <div class="modal-body">
                                                        <div class="p-4 pb-0">
                                                            <div class="mb-3">
                                                                <label class="col-form-label"
                                                                       for="recipient-name">
                                                                    nom complet
                                                                </label>
                                                                <input name="name" value="{{ $team->nom }}"
                                                                       class="form-control" id="recipient-name"
                                                                       type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label"
                                                                       for="image">
                                                                    image du membre
                                                                </label>
                                                                <div class="form-file">
                                                                    <input name="image" class="form-file-input"
                                                                           id="image"
                                                                           type="file"/>
                                                                    <label class="form-file-label" for="customFile">
                                                                        <span class="form-file-text">Choose file...</span><span
                                                                                class="form-file-button">Browse</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="role"
                                                                       class="col-form-label">Fonction</label>
                                                                <input name="role" value="{{ $team->role }}"
                                                                       class="form-control" id="role"
                                                                       type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="facebook" class="col-form-label">lien
                                                                    facebook</label>
                                                                <input name="link_facebook"
                                                                       value="{{ $team->link_facebook }}"
                                                                       class="form-control" id="facebook"
                                                                       type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="twitter" class="col-form-label">lien
                                                                    twitter</label>
                                                                <input name="link_twitter"
                                                                       value="{{ $team->link_twitter }}"
                                                                       class="form-control" id="twitter"
                                                                       type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="whatsaap" class="col-form-label">lien
                                                                    whatsaap</label>
                                                                <input name="link_whatsaap"
                                                                       value="{{ $team->link_whatsaap }}"
                                                                       class="form-control" id="whatsaap"
                                                                       type="text">
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="linkedin" class="col-form-label">lien
                                                                    linkedin</label>
                                                                <input name="link_linkedin"
                                                                       value="{{ $team->link_linkedin }}"
                                                                       class="form-control" id="linkedin"
                                                                       type="text">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Fermer
                                                        </button>
                                                        <button type="submit" class="btn btn-primary">modifier
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endsection
        <script>
            import Button from "../../../js/Jetstream/Button";

            export default {
                components: {Button}
            }
        </script>