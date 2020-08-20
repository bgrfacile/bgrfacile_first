@extends('layout_admin_G')

@section('content')
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10 col-xl-8">
                    <div class="header mt-md-5">
                        <div class="header-body">
                            <div class="row align-items-center">
                                <div class="col">
                                    <div class="row">
                                        <div class="col">
                                            <h6 class="header-pretitle">
                                                NOUVEAU PROJET
                                            </h6>
                                            <h1 class="header-title">
                                                Créer un nouveau cours ou cycle
                                            </h1>
                                        </div>
                                        <div class="col-auto">
                                            <a href="{{ route('dashboardG.cours.index') }}">
                                                <i class="fe fe-x-circle" style="font-size: 32px;color: #12263f"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <form class="mb-4">
                        <div class="form-group">
                            <label>
                                Project name
                            </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="mb-1">
                                Project description
                            </label>
                            <small class="form-text text-muted">
                                This is how others will learn about the project, so make it good!
                            </small>
                            <div data-toggle="quill"></div>
                        </div>
                        <div class="form-group">
                            <label>
                                Project tags
                            </label>
                            <select class="form-control" data-toggle="select" multiple>
                                <option>CSS</option>
                                <option>HTML</option>
                                <option>JavaScript</option>
                                <option>Bootstrap</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>
                                        Start date
                                    </label>
                                    <input type="text" class="form-control" data-toggle="flatpickr">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label>
                                        End date
                                    </label>
                                    <input type="text" class="form-control" data-toggle="flatpickr">
                                </div>
                            </div>
                        </div>
                        <hr class="mt-4 mb-5">
                        <div class="form-group">
                            <label class="mb-1">
                                Project cover
                            </label>
                            <small class="form-text text-muted">
                                Please use an image no larger than 1200px * 600px.
                            </small>
                            <div class="dropzone dropzone-single mb-3" data-toggle="dropzone" data-options='{"url": "https://", "maxFiles": 1, "acceptedFiles": "image/*"}'>
                                <div class="fallback">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="projectCoverUploads">
                                        <label class="custom-file-label" for="projectCoverUploads">Choose file</label>
                                    </div>
                                </div>
                                <div class="dz-preview dz-preview-single">
                                    <div class="dz-preview-cover">
                                        <img class="dz-preview-img" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..." data-dz-thumbnail>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-5 mb-5">
                        <div class="form-group">
                            <label class="mb-1">
                                Starting files
                            </label>
                            <small class="form-text text-muted">
                                Upload any files you want to start the projust with.
                            </small>
                            <div class="card">
                                <div class="card-body">
                                    <div class="dropzone dropzone-multiple" data-toggle="dropzone" data-options='{"url": "https://"}'>
                                        <div class="fallback">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="customFileUpload" multiple>
                                                <label class="custom-file-label" for="customFileUpload">Choose file</label>
                                            </div>
                                        </div>
                                        <ul class="dz-preview dz-preview-multiple list-group list-group-lg list-group-flush">
                                            <li class="list-group-item">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <div class="avatar">
                                                            <img class="avatar-img rounded" src="data:image/svg+xml,%3csvg3c/svg%3e" alt="..." data-dz-thumbnail>
                                                        </div>
                                                    </div>
                                                    <div class="col ml-n3">
                                                        <h4 class="mb-1" data-dz-name>...</h4>
                                                        <p class="small text-muted mb-0" data-dz-size></p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <i class="fe fe-more-vertical"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a href="#" class="dropdown-item" data-dz-remove>
                                                                    Remove
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="mt-5 mb-5">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    <label class="mb-1">
                                        Private project
                                    </label>
                                    <small class="form-text text-muted">
                                        If you are available for hire outside of the current situation, you can encourage others to hire you.
                                    </small>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="switchOne">
                                        <label class="custom-control-label" for="switchOne"></label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="card bg-light border">
                                    <div class="card-body">
                                        <h4 class="mb-2">
                                            <i class="fe fe-alert-triangle"></i> Warning
                                        </h4>
                                        <p class="small text-muted mb-0">
                                            Once a project is made private, you cannot revert it to a public project.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <hr class="mt-5 mb-5">
                        <a href="#" class="btn btn-block btn-primary">
                            Create project
                        </a>
                        <a href="#" class="btn btn-block btn-link text-muted">
                            Cancel this project
                        </a>
                    </form>
                </div>
            </div>
        </div>
@endsection
