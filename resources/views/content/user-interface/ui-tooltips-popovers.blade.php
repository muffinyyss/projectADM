@extends('layouts.contentNavbarLayout')

@section('title', 'Tooltips and popovers - UI elements')

<!-- Page Script -->
@section('page-script')
    @vite(['resources/assets/js/ui-popover.js'])
@endsection

@section('content')
    <!-- Tooltips -->
    <div class="card mb-6">
        <h5 class="card-header">Tooltips</h5>
        <div class="card-body">
            <div class="text-light small fw-medium">Directions</div>
            <div class="row demo-vertical-spacing">
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="Tooltip on right">
                        Right
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="Tooltip on top">
                        Top
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="Tooltip on bottom">
                        Bottom
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="Tooltip on left">
                        Left
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--/ Tooltips -->

    <!-- Popovers -->
    <div class="card">
        <h5 class="card-header">Popovers</h5>
        <div class="card-body">
            <div class="text-light small fw-medium">Directions</div>
            <div class="row demo-vertical-spacing">
                <div class="col">
                    <button type="button" class="btn btn-primary text-nowrap" data-bs-animation="true"
                        data-bs-toggle="popover" data-bs-placement="right"
                        data-bs-content="This is a very beautiful popover, show some love." title="Popover title">
                        Popover on right
                    </button>

                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover"
                        data-bs-placement="top" data-bs-content="This is a very beautiful popover, show some love."
                        title="Popover title">
                        Popover on top
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover"
                        data-bs-placement="bottom" data-bs-content="This is a very beautiful popover, show some love."
                        title="Popover title">
                        Popover on bottom
                    </button>
                </div>
                <div class="col">
                    <button type="button" class="btn btn-primary text-nowrap" data-bs-toggle="popover"
                        data-bs-placement="left" data-bs-content="This is a very beautiful popover, show some love."
                        title="Popover title">
                        Popover on left
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--/ Popovers -->
@endsection
