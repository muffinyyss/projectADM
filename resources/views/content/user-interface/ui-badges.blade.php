@extends('layouts.contentNavbarLayout')

@section('title', 'Badges - UI elements')

@section('content')
    <div class="row">
        <!-- Basic Badges -->
        <div class="col-lg">
            <div class="card mb-6">
                <h5 class="card-header">Basic Badges</h5>
                <div class="card-body">
                    <div class="text-light small fw-medium">Default</div>
                    <div class="demo-inline-spacing">
                        <span class="badge bg-primary">Primary</span>
                        <span class="badge bg-secondary">Secondary</span>
                        <span class="badge bg-success">Success</span>
                        <span class="badge bg-danger">Danger</span>
                        <span class="badge bg-warning">Warning</span>
                        <span class="badge bg-info">Info</span>
                        <span class="badge bg-dark">Dark</span>
                    </div>
                </div>
                <hr class="m-0" />
                <div class="card-body">
                    <div class="text-light small fw-medium">Pills</div>

                    <div class="demo-inline-spacing">
                        <span class="badge rounded-pill bg-primary">Primary</span>
                        <span class="badge rounded-pill bg-secondary">Secondary</span>
                        <span class="badge rounded-pill bg-success">Success</span>
                        <span class="badge rounded-pill bg-danger">Danger</span>
                        <span class="badge rounded-pill bg-warning">Warning</span>
                        <span class="badge rounded-pill bg-info">Info</span>
                        <span class="badge rounded-pill bg-dark">Dark</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Label Badges -->
        <div class="col-lg">
            <div class="card mb-6">
                <h5 class="card-header">Label Badges</h5>
                <div class="card-body">
                    <div class="text-light small fw-medium">Label Default</div>

                    <div class="demo-inline-spacing">
                        <span class="badge bg-label-primary">Primary</span>
                        <span class="badge bg-label-secondary">Secondary</span>
                        <span class="badge bg-label-success">Success</span>
                        <span class="badge bg-label-danger">Danger</span>
                        <span class="badge bg-label-warning">Warning</span>
                        <span class="badge bg-label-info">Info</span>
                        <span class="badge bg-label-dark">Dark</span>
                    </div>
                </div>
                <hr class="m-0" />
                <div class="card-body">
                    <div class="text-light small fw-medium">Label Pills</div>

                    <div class="demo-inline-spacing">
                        <span class="badge rounded-pill bg-label-primary">Primary</span>
                        <span class="badge rounded-pill bg-label-secondary">Secondary</span>
                        <span class="badge rounded-pill bg-label-success">Success</span>
                        <span class="badge rounded-pill bg-label-danger">Danger</span>
                        <span class="badge rounded-pill bg-label-warning">Warning</span>
                        <span class="badge rounded-pill bg-label-info">Info</span>
                        <span class="badge rounded-pill bg-label-dark">Dark</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Button with Badges -->
        <div class="col-lg">
            <div class="card mb-6">
                <h5 class="card-header">Button with Badges</h5>
                <div class="row row-bordered g-0">
                    <div class="col-lg-6 p-6">
                        <small class="text-light fw-medium">Default</small>
                        <div class="demo-vertical-spacing">
                            <button type="button" class="btn btn-primary me-2">
                                Text
                                <span class="badge badge-center bg-white text-primary ms-1">4</span>
                            </button>
                            <button type="button" class="btn btn-primary me-2">
                                Text
                                <span class="badge badge-center bg-secondary rounded-pill ms-1">4</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6 p-6">
                        <small class="text-light fw-medium">Outline</small>
                        <div class="demo-vertical-spacing">
                            <button type="button" class="btn btn-outline-primary me-2">
                                Text
                                <span class="badge badge-center ms-1">4</span>
                            </button>
                            <button type="button" class="btn btn-outline-secondary me-2">
                                Text
                                <span class="badge badge-center rounded-pill ms-1">4</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Badge Circle -->
        <div class="col-12">
            <div class="card mb-6">
                <h5 class="card-header">Badge Circle & Square Style</h5>
                <div class="row row-bordered g-0">
                    <div class="col-lg-6 p-6">
                        <h6>Basic</h6>
                        <div class="text-light small fw-medium mb-2">Default</div>
                        <div class="demo-inline-spacing">
                            <p>
                                <span class="badge badge-center rounded-pill bg-primary">1</span>
                                <span class="badge badge-center rounded-pill bg-secondary">2</span>
                                <span class="badge badge-center rounded-pill bg-success">3</span>
                                <span class="badge badge-center rounded-pill bg-danger">4</span>
                                <span class="badge badge-center rounded-pill bg-warning">5</span>
                                <span class="badge badge-center rounded-pill bg-info">6</span>
                            </p>
                            <p>
                                <span class="badge badge-center bg-primary">1</span>
                                <span class="badge badge-center bg-secondary">2</span>
                                <span class="badge badge-center bg-success">3</span>
                                <span class="badge badge-center bg-danger">4</span>
                                <span class="badge badge-center bg-warning">5</span>
                                <span class="badge badge-center bg-info">6</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 p-6">
                        <h6>Label</h6>
                        <div class="text-light small fw-medium mb-2">Default</div>
                        <div class="demo-inline-spacing">
                            <p>
                                <span class="badge badge-center rounded-pill bg-label-primary">1</span>
                                <span class="badge badge-center rounded-pill bg-label-secondary">2</span>
                                <span class="badge badge-center rounded-pill bg-label-success">3</span>
                                <span class="badge badge-center rounded-pill bg-label-danger">4</span>
                                <span class="badge badge-center rounded-pill bg-label-warning">5</span>
                                <span class="badge badge-center rounded-pill bg-label-info">6</span>
                            </p>
                            <p>
                                <span class="badge badge-center bg-label-primary">1</span>
                                <span class="badge badge-center bg-label-secondary">2</span>
                                <span class="badge badge-center bg-label-success">3</span>
                                <span class="badge badge-center bg-label-danger">4</span>
                                <span class="badge badge-center bg-label-warning">5</span>
                                <span class="badge badge-center bg-label-info">6</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
