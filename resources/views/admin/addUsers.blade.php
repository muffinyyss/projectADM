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

    <!-- Layout Content -->
    <div class="layout-wrapper layout-content-navbar ">
        <div class="layout-container">

            <!-- Content wrapper -->
            <div class="content-wrapper">

                <!-- Content -->
                <div class="container-xxl flex-grow-1 container-p-y">

                    <h4 class="mb-1">Users List</h4>
                    <p class="mb-6">A position provided access to predefined menus and features so that depending
                        on assigned position an administrator can have access to what user needs.</p>




                    <!-- Role cards -->
                    <div class="row g-6">

                        <div class="col-12">
                            <!-- Role Table -->
                            <div class="card">

                                <div class="card-header border-bottom">
                                    {{-- <h6 class="card-title mb-0">Filters</h6>
                                    <div
                                        class="d-flex justify-content-between align-items-center row pt-4 pb-2 gap-4 gap-md-0 gx-5">
                                        <div class="col-md-4 user_role"><select id="UserRole"
                                                class="form-select text-capitalize">
                                                <option value=""> Select Role </option>
                                                <option value="Admin">Admin</option>
                                                <option value="Author">Author</option>
                                                <option value="Editor">Editor</option>
                                                <option value="Maintainer">Maintainer</option>
                                                <option value="Subscriber">Subscriber</option>
                                            </select></div>
                                        <div class="col-md-4 user_plan"><select id="UserPlan"
                                                class="form-select text-capitalize">
                                                <option value=""> Select Plan </option>
                                                <option value="Basic">Basic</option>
                                                <option value="Company">Company</option>
                                                <option value="Enterprise">Enterprise</option>
                                                <option value="Team">Team</option>
                                            </select></div>
                                        <div class="col-md-4 user_status"><select id="FilterTransaction"
                                                class="form-select text-capitalize">
                                                <option value=""> Select Status </option>
                                                <option value="Pending" class="text-capitalize">Pending</option>
                                                <option value="Active" class="text-capitalize">Active</option>
                                                <option value="Inactive" class="text-capitalize">Inactive</option>
                                            </select></div>
                                    </div> --}}
                                </div>


                                <div class="card-datatable table-responsive datatable-roles">
                                    <div class="row mx-1 mt-3 mb-3">
                                        <div
                                            class="col-md-2 d-flex align-items-center justify-content-md-start justify-content-center ps-4">
                                            <div class="dt-action-buttons mt-4 mt-md-0">
                                                <div class="dt-buttons btn-group flex-wrap">
                                                    {{-- <div class="btn-group"><button
                                                            class="btn btn-secondary buttons-collection dropdown-toggle btn-outline-secondary me-4 waves-effect waves-light"
                                                            tabindex="0" aria-controls="DataTables_Table_0"
                                                            type="button" aria-haspopup="dialog"
                                                            aria-expanded="false"><span><i
                                                                    class="ri-download-line ri-16px me-1"></i> <span
                                                                    class="d-none d-sm-inline-block">Export</span></span></button>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-10">
                                            <div
                                                class="d-flex align-items-center justify-content-md-end justify-content-center">

                                                <form method="GET" action="{{ route('addUsers') }}"
                                                    class="d-flex gap-2 flex-wrap">
                                                    <div class="user_role w-px-200 pb-5 pb-md-0 me-4">
                                                        <select id="UserRole" name="position"
                                                            class="form-select text-capitalize form-select-sm"
                                                            onchange="this.form.submit()">
                                                            <option value=""> Select Position </option>
                                                            @foreach ($positions as $position)
                                                                <option value="{{ $position }}"
                                                                    {{ request('position') == $position ? 'selected' : '' }}>
                                                                    {{ $position }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </form>


                                                <div class="me-4">
                                                    <form method="GET" action="{{ route('addUsers') }}">
                                                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                            <label>
                                                                <input type="search" name="search"
                                                                    class="form-control form-control-sm"
                                                                    placeholder="Search User"
                                                                    aria-controls="DataTables_Table_0"
                                                                    value="{{ request('search') }}">
                                                            </label>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="add-new">
                                                    <button data-bs-target="#addUser" data-bs-toggle="modal"
                                                        class="btn btn-primary waves-effect waves-light"
                                                        data-bs-toggle="offcanvas">Add
                                                        New User</button>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                    <table class="datatables-users table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Fullname</th>
                                                <th>Username</th>
                                                <th>Position</th>
                                                {{-- <th>Plan</th>
                                                <th>Status</th> --}}
                                                <th class="text-center">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($users as $user)
                                                <tr>
                                                    <td></td>
                                                    <td>{{ ($users->currentPage() - 1) * $users->perPage() + $loop->iteration }}
                                                    </td>
                                                    <td>{{ $user['EN_fullname'] }}</td>
                                                    <td>{{ $user['Username'] }}</td>
                                                    <td>{{ $user['Position'] }}</td>
                                                    {{-- <td></td>
                                                    <td></td> --}}
                                                    <td class="text-center">

                                                        <!-- Delete icon -->
                                                        <form action="{{ route('users.destroy', $user['ID']) }}"
                                                            method="POST" style="display:inline;"
                                                            onsubmit="return confirm('Are you sure to delete this user?');">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" title="Delete"
                                                                style="border:none; background:none; padding:0; cursor:pointer; color: #dc3545;">
                                                                <i class="ri-delete-bin-line ri-20px me-2"></i>
                                                            </button>
                                                        </form>

                                                        <!-- View icon -->
                                                        {{-- <a href="#" class="me-2" title="View">
                                                            <i class="ri-eye-line ri-20px"></i>
                                                        </a> --}}

                                                        <!-- Edit icon -->
                                                        <a href="{{ route('users.edit', ['id' => $user['ID'], 'page' => request()->page]) }}"
                                                            title="Edit">
                                                            <i class="ri-pencil-line ri-20px"></i>
                                                        </a>


                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="row mx-1">
                                        <div class="mt-5">
                                            {{ $users->links() }}
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--/ Role Table -->
                        </div>
                    </div>
                    <!--/ Role cards -->


                    <!--/ Add User Modal -->
                    <div class="modal fade" id="addUser" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="mb-2">Add User Information</h4>
                                        <p class="mb-6">Adding a new user will receive a privacy audit.
                                        </p>
                                    </div>
                                    <form id="addUserForm" class="row g-5" method="POST"
                                        action="{{ route('users.store') }}">
                                        @csrf

                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="site" name="Site" class="form-control"
                                                    required />
                                                <label for="site">Site</label>
                                            </div>
                                            @error('Site')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="branch" name="Branch" class="form-control"
                                                    required />
                                                <label for="branch">Branch</label>
                                            </div>
                                            @error('Branch')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="th_fullname" name="TH_fullname"
                                                    class="form-control" required />
                                                <label for="th_fullname">TH Fullname</label>
                                            </div>
                                            @error('TH_fullname')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="en_fullname" name="EN_fullname"
                                                    class="form-control" required />
                                                <label for="en_fullname">EN Fullname</label>
                                            </div>
                                            @error('EN_fullname')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="nickname" name="Nickname"
                                                    class="form-control" required />
                                                <label for="nickname">Nickname</label>
                                            </div>
                                            @error('Nickname')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="position" name="Position"
                                                    class="form-control" required />
                                                <label for="position">Position</label>
                                            </div>
                                            @error('Position')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="username" name="Username"
                                                    class="form-control" required />
                                                <label for="username">Username</label>
                                            </div>
                                            @error('Username')
                                                <div class="text-danger mt-1">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-md-6">
                                            <div class="form-password-toggle mb-5">
                                                <div class="input-group input-group-merge">
                                                    <div class="form-floating form-floating-outline">
                                                        <input type="password" class="form-control" id="password"
                                                            name="Password" placeholder="············" required />
                                                        <label for="password">Password</label>
                                                    </div>
                                                    <span class="input-group-text cursor-pointer"><i
                                                            class="ri-eye-off-line ri-20px"></i></span>
                                                </div>
                                                @error('Password')
                                                    <div class="text-danger mt-1">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-3">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--/ Add User Modal -->


                    <!-- Edit User Modal -->
                    <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-simple modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-body p-0">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                    <div class="text-center mb-6">
                                        <h4 class="mb-2">Edit User Information</h4>
                                        <p class="mb-6">Updating user details will receive a privacy audit.
                                        </p>
                                    </div>
                                    <form id="editUserForm" class="row g-5" onsubmit="return false">
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserFirstName"
                                                    name="modalEditUserFirstName" class="form-control" value="Oliver"
                                                    placeholder="Oliver" />
                                                <label for="modalEditUserFirstName">First Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserLastName"
                                                    name="modalEditUserLastName" class="form-control" value="Queen"
                                                    placeholder="Queen" />
                                                <label for="modalEditUserLastName">Last Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserName" name="modalEditUserName"
                                                    class="form-control" value="oliver.queen"
                                                    placeholder="oliver.queen" />
                                                <label for="modalEditUserName">Username</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditUserEmail" name="modalEditUserEmail"
                                                    class="form-control" value="oliverqueen@gmail.com"
                                                    placeholder="oliverqueen@gmail.com" />
                                                <label for="modalEditUserEmail">Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <select id="modalEditUserStatus" name="modalEditUserStatus"
                                                    class="form-select" aria-label="Default select example">
                                                    <option value="1" selected>Active</option>
                                                    <option value="2">Inactive</option>
                                                    <option value="3">Suspended</option>
                                                </select>
                                                <label for="modalEditUserStatus">Status</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="form-floating form-floating-outline">
                                                <input type="text" id="modalEditTaxID" name="modalEditTaxID"
                                                    class="form-control modal-edit-tax-id" placeholder="123 456 7890" />
                                                <label for="modalEditTaxID">Tax ID</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="input-group input-group-merge">
                                                <span class="input-group-text">US (+1)</span>
                                                <div class="form-floating form-floating-outline">
                                                    <input type="text" id="modalEditUserPhone"
                                                        name="modalEditUserPhone" class="form-control phone-number-mask"
                                                        value="+1 609 933 4422" placeholder="+1 609 933 4422" />
                                                    <label for="modalEditUserPhone">Phone Number</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center">
                                            <button type="submit" class="btn btn-primary me-3">Submit</button>
                                            <button type="reset" class="btn btn-outline-secondary"
                                                data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/ Edit User Modal -->
                    <!-- / Modal -->

                </div>
                <!-- / Content -->


                {{-- <div class="content-backdrop fade"></div> --}}
            </div>
            <!--/ Content wrapper -->
            {{-- </div> --}}
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        {{-- <div class="layout-overlay layout-menu-toggle"></div> --}}
        <!-- Drag Target Area To SlideIn Menu On Small Screens -->
        {{-- <div class="drag-target"></div> --}}
    </div>
    <!-- / Layout wrapper -->
    <!--/ Layout Content -->



    <!-- Include Scripts -->
    <!-- $isFront is used to append the front layout scripts only on the front layout otherwise the variable will be blank -->
    <!-- BEGIN: Vendor JS-->

    {{-- <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/node-waves-XDuO7R8f.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/hammer-36U3igM9.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/menu-CY9lYqyY.js" />
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CbdDuLi-.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popper-DNZnuk_L.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap-B-W6M1Y3.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/node-waves-XDuO7R8f.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/perfect-scrollbar-CLUWhEAQ.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/hammer-36U3igM9.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/typeahead-BKwBoP4T.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/menu-CY9lYqyY.js">
        </script>
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-bootstrap5-DVZaE8TT.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjsHelpers-BosuxZz1.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/_commonjs-dynamic-modules-TDtrdbi3.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-CED9k22g.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/jquery-Czc5UB_B.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popular-BiiL9sLA.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap5-COKFI6zn.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/index-CrI7K4FP.js" />
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/auto-focus-DSygTglc.js" />
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/datatables-bootstrap5-DVZaE8TT.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/popular-BiiL9sLA.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/bootstrap5-COKFI6zn.js">
        </script>
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/auto-focus-DSygTglc.js">
        </script><!-- END: Page Vendor JS-->
        <!-- BEGIN: Theme JS-->
        <link rel="modulepreload"
            href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/main-DRGn0ueN.js" />
        <script type="module"
            src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/main-DRGn0ueN.js">
        </script> --}}
    <!-- END: Theme JS-->
    <!-- Pricing Modal JS-->
    <!-- END: Pricing Modal JS-->
    <!-- BEGIN: Page JS-->

    {{-- <link rel="modulepreload"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/app-access-roles-BdlGvEK7.js" />
    <link rel="modulepreload"
        href="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/modal-add-role-BPqCDwfP.js" />
    <script type="module"
        src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/app-access-roles-BdlGvEK7.js">
    </script>
    <script type="module"
        src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/build/assets/modal-add-role-BPqCDwfP.js">
    </script> --}}
    <!-- END: Page JS-->

    {{-- </body> --}}

    {{-- </html> --}}

@endsection

{{-- @section('page-script')
    <script>
        document.getElementById('search').addEventListener('keyup', function() {
            const query = this.value;

            fetch(`/live-search?query=${query}`)
                .then(response => response.text())
                .then(data => {
                    document.getElementById('user-table').innerHTML = data;
                });
        });
    </script>



@endsection --}}
