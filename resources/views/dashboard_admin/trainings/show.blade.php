@extends('layouts.dashboardAdmin')

@section('title')
    {{ $training->name }}
@endsection

@section('contenue')
    {{--    entete--}}
    <div class="card mb-3">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col">
                    <div class="d-flex">
                        <div class="flex-1 fs--1">
                            <h5 class="fs-0">{{ $training->name }}</h5>
                            <p class="mb-0">Crée le
                                <span class="text-primary">
                                    {{ \Carbon\Carbon::parse($training->created_at)->format('d M. Y')  }}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-auto mt-4 mt-md-0">
                    <button class="btn btn-falcon-danger btn-sm px-4 px-sm-5" type="button">rendre indisponible</button>
                </div>
            </div>
        </div>
    </div>

    {{--    corps--}}
    <div class="row g-0">
        {{--        gauche--}}
        <div class="col-lg-8 pr-lg-2">
            <div class="card mb-5 overflow-hidden text-white bg-200 text-200 ">
                <div class="bg-holder bg-card"
                     style="background-image:url( {{ asset('dist/assets/img/illustrations/corner-1.png') }});"></div>
                <div class="card-body position-relative">
                    <div class="row flex-between-center">
                        <div class="col-md">
                            <h5 class="mb-2 mb-md-0">Crée un niveau</h5>
                        </div>
                        <div class="col-auto">
                            <button class="btn btn-falcon-default btn-sm mr-2" role="button" data-toggle="modal"
                                    data-target="#ajout-level">
                                créer
                            </button>
                        </div>
                    </div>
                    {{--                        La modal--}}
                    <div class="modal fade" id="ajout-level" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Ajouter un niveau</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal"
                                            aria-label="Close"></button>
                                </div>
                                <form action="{{ route('levels.store') }}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="training_id" value="{{ $training->id }}">
                                    <div class="modal-body">
                                        <div class="p-4 pb-0">
                                            <div class="mb-3">
                                                <label class="col-form-label"
                                                       for="recipient-name">
                                                    Nom du niveau:
                                                </label>
                                                <input name="name" class="form-control" id="recipient-name"
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

            @foreach($levels as $level)

                <div class="card mb-3">
                    <div class="card-header bg-light">
                        <div class="row flex-between-center">
                            <div class="col-4 col-sm-auto d-flex align-items-center pr-0">
                                <h5 class="mb-0">{{ $level['name'] }}</h5>
                            </div>
                            <div class="col-8 col-sm-auto text-right pl-2">
                                <form style="display: inline-block"
                                      action="{{ route('levels.destroy',['level'=>$level['id']]) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-outline-danger btn-sm" type="submit">
                                        <span class="fas fa-trash ml-1" data-fa-transform="shrink-3"></span>
                                    </button>
                                </form>

                                <button class="btn btn-outline-dark btn-sm" type="button" data-toggle="modal"
                                        data-target="#modif-{{ $level['id'] }}">
                                    <span class="fas fa-pencil-alt ml-1" data-fa-transform="shrink-3"></span>
                                </button>
                                {{--modal modification level--}}
                                <div class="modal fade" id="modif-{{ $level['id'] }}" tabindex="-1" role="dialog"
                                     aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Modifier du niveau</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('levels.update',['level'=>$level['id']]) }}"
                                                  method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                @method('put')
                                                <div class="modal-body">
                                                    <div class="p-4 pb-0">
                                                        <div class="mb-3">
                                                            <label class="col-form-label"
                                                                   for="recipient-name">
                                                                Nom du niveau:
                                                            </label>
                                                            <input name="name" value="{{ $level['name'] }}"
                                                                   class="form-control" id="recipient-name"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">
                                                        Fermer
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-outline-success btn-sm" type="button" data-toggle="modal"
                                        data-target="#ajout-subject-{{ $level['id'] }}">
                                    <span class="fas fa-plus" data-fa-transform="shrink-3 down-2"></span>
                                    <span class="d-none d-sm-inline-block ml-1">Ajouter matière</span>
                                </button>
                                {{-- La modal ajout matiere--}}
                                <div class="modal fade" id="ajout-subject-{{ $level['id']  }}" tabindex="-1"
                                     role="dialog" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ajouter une matiere</h5>
                                                <button type="button" class="btn-close" data-dismiss="modal"
                                                        aria-label="Close"></button>
                                            </div>
                                            <form action="{{ route('subject.store') }}" method="post"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="level_id" value="{{ $level['id'] }}">
                                                <div class="modal-body">
                                                    <div class="p-4 pb-0">
                                                        <div class="mb-3">
                                                            <label class="col-form-label"
                                                                   for="recipient-name">
                                                                Nom de la matiere:
                                                            </label>
                                                            <input name="name" class="form-control" id="recipient-name"
                                                                   type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">

                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Fermer
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
                    <div class="card-body fs--1">

                        @foreach($level['subjects'] as $subject)
                            <div class="d-flex btn-reveal-trigger">
                                <div class="flex-1 position-relative pl-3">
                                    <div class="bg-light btn-reveal-trigger d-flex flex-between-center">
                                        <h6 class="mb-0">
                                            <span>{{ $subject->name }}</span>
                                        </h6>
                                        <div>
                                            <button class="btn btn-link btn-sm btn-reveal text-600"
                                                    type="button" data-toggle="modal"
                                                    data-target="#edit-matiere-{{ $subject->id }}">
                                                <span class="fas fa-pencil-alt"></span>
                                            </button>
                                            {{--                                            model edit--}}
                                            <div class="modal fade" id="edit-matiere-{{ $subject->id }}"
                                                 tabindex="-1"
                                                 role="dialog"
                                                 aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Modifier la
                                                                matiere</h5>
                                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <form
                                                            action="{{ route('subject.update',['subject'=>$subject->id]) }}"
                                                            method="post"
                                                            enctype="multipart/form-data">
                                                            @csrf
                                                            @method('put')
                                                            <div class="modal-body">
                                                                <div class="p-4 pb-0">
                                                                    <div class="mb-3">
                                                                        <label class="col-form-label"
                                                                               for="recipient-name">
                                                                            Nom de la matiere:
                                                                        </label>
                                                                        <input name="name" class="form-control"
                                                                               id="recipient-name" type="text"
                                                                               value="{{ $subject->name }}">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Fermer
                                                                </button>
                                                                <button type="submit" class="btn btn-primary">
                                                                    Modifier
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <form style="display: inline-block"
                                                  action="{{ route('subject.destroy',['subject'=>$subject->id]) }}"
                                                  method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-link btn-sm btn-reveal text-600">
                                                    <span class="far fa-trash-alt"></span>
                                                </button>
                                            </form>

                                        </div>
                                    </div>
                                    <div class="border-dashed-bottom my-3"></div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <div class="card-footer bg-light p-0 border-top">
                    </div>
                </div>

            @endforeach

        </div>


        {{--        droite--}}
        <div class="col-lg-4 pl-lg-2">
            <div class="sticky-sidebar">
                <div class="card mb-3 fs--1">
                    <div class="card-body">
                        <div>
                            <button class="btn btn-falcon-default btn-block mb-2" data-toggle="modal"
                                    data-target="#modif-cycle-{{ $training->id }}">
                                <span class="far fa-edit text-primary mr-1"></span>
                                <span class="font-weight-medium ml-2 text-primary">Modifier</span>
                            </button>
                            {{--modal de modification--}}
                            <div class="modal fade" id="modif-cycle-{{ $training->id }}" tabindex="-1" role="dialog"
                                 aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modifier le cycle</h5>
                                            <button type="button" class="btn-close" data-dismiss="modal"
                                                    aria-label="Close"></button>
                                        </div>
                                        <form action="{{ route('training.update',['training'=>$training->id]) }}"
                                              method="post"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('put')
                                            <div class="modal-body">
                                                <div class="p-4 pb-0">
                                                    <div class="mb-3">
                                                        <label class="col-form-label"
                                                               for="recipient-name">
                                                            Nom du cycle:
                                                        </label>
                                                        <input name="name" value="{{ $training->name }}"
                                                               class="form-control" id="recipient-name"
                                                               type="text">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="message-text"
                                                               class="col-form-label">Diplome:</label>
                                                        <input name="diploma" value="{{ $training->diploma }}"
                                                               class="form-control" id="recipient-name"
                                                               type="text">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    Fermer
                                                </button>
                                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h6 class="mt-4">Diplome à la fin</h6>
                        <div class="fs--1 mb-0">
                            <p class="mb-1">{{ $training->diploma }}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
