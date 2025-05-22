@extends('layouts.contentNavbarLayout')

@section('title', 'Add users')

@section('vendor-style')
    @vite('resources/assets/vendor/libs/apex-charts/apex-charts.scss')
@endsection

@section('vendor-script')
    @vite('resources/assets/vendor/libs/apex-charts/apexcharts.js')
@endsection

@section('page-script')
    @vite('resources/assets/js/dashboards-analytics.js')
@endsection

@section('content')
    <div class="container mt-4">
        <div class="card shadow rounded-3">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Edit User</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('users.update', $user->ID) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="Site" class="form-label">Site</label>
                        <input type="text" name="Site" value="{{ old('Site', $user->Site) }}" class="form-control"
                            required>
                    </div>

                    <div class="mb-3">
                        <label for="TH_fullname" class="form-label">TH Fullname</label>
                        <input type="text" name="TH_fullname" value="{{ old('TH_fullname', $user->TH_fullname) }}"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="EN_fullname" class="form-label">EN Fullname</label>
                        <input type="text" name="EN_fullname" value="{{ old('EN_fullname', $user->EN_fullname) }}"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Nickname" class="form-label">Nickname</label>
                        <input type="text" name="Nickname" value="{{ old('Nickname', $user->Nickname) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="Username" class="form-label">Username</label>
                        <input type="text" name="Username" value="{{ old('Username', $user->Username) }}"
                            class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label for="Password" class="form-label">Password <small
                                class="text-muted">(ใส่ใหม่ถ้าจะเปลี่ยน)</small></label>
                        <input type="password" name="Password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="Position" class="form-label">Position</label>
                        <input type="text" name="Position" value="{{ old('Position', $user->Position) }}"
                            class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="Branch" class="form-label">Branch</label>
                        <input type="text" name="Branch" value="{{ old('Branch', $user->Branch) }}"
                            class="form-control">
                    </div>

                    <div class="text-end">
                        <button type="submit" class="btn btn-success">Update User</button>
                        <a href="{{ route('addUsers') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
