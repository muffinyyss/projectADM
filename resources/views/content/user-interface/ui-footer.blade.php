@extends('layouts.contentNavbarLayout')

@section('title', 'Footer - UI elements')

@section('content')
    <!-- Basic footer -->
    <section id="basic-footer">
        <h5 class="pb-1 mb-6">Basic Footer</h5>

        <footer class="footer bg-lighter">
            <div
                class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-4">
                <div>
                    <a href="{{ config('variables.livePreview') }}" target="_blank"
                        class="footer-text fw-bold">{{ config('variables.templateName') }}</a> ©
                </div>
                <div class="d-flex flex-column flex-sm-row">
                    <a href="{{ config('variables.licenseUrl') }}" class="footer-link me-6" target="_blank">License</a>
                    <a href="javascript:void(0)" class="footer-link me-6">Help</a>
                    <a href="javascript:void(0)" class="footer-link me-6">Contact</a>
                    <a href="javascript:void(0)" class="footer-link">Terms &amp; Conditions</a>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Basic footer -->
    <hr class="container-m-nx border-light my-12" />

    <!-- Footer with components -->
    <section id="component-footer">
        <h5 class="pb-1 mb-6">Footer with Elements</h5>

        <footer class="footer bg-lighter">
            <div
                class="container-fluid d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 container-p-x py-4">
                <div>
                    <a href="{{ config('variables.livePreview') }}" target="_blank"
                        class="footer-text fw-bold">{{ config('variables.templateName') }}</a> ©
                </div>
                <div class="d-flex flex-column flex-sm-row gap-4">
                    <div class="form-check footer-link mb-0 mt-1">
                        <input class="form-check-input" type="checkbox" value="" id="customCheck2" checked />
                        <label class="form-check-label" for="customCheck2">
                            Show
                        </label>
                    </div>
                    <div class="dropdown dropup footer-link">
                        <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Currency
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                    class='ri-money-dollar-circle-line me-2'></i>USD</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                    class='ri-money-euro-circle-line me-2'></i>Euro</a>
                            <a class="dropdown-item" href="javascript:void(0);"><i
                                    class='ri-money-pound-circle-line me-2'></i>Pound</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="javascript:void(0);"><i class='ri-btc-line me-2'></i>Bitcoin</a>
                        </div>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-sm btn-outline-danger"><i
                            class='ri-logout-box-r-line me-1'></i>Logout</a>
                </div>
            </div>
        </footer>
    </section>
    <!--/ Footer with components -->
@endsection
