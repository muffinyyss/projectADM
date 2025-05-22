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
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6"> --}}
                        {{-- <div class="card">
                                <div class="card-body"> --}}
                        {{-- <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 4 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Vinnie Mostowy" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/5.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Allen Rieske" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Julee Rossignol" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div> --}}
                        {{-- <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Administrator</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div> --}}
                        {{-- </div>
                            </div> --}}
                        {{-- </div> --}}
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 7 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Jimmy Ressula" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/4.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="John Doe" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/1.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Kristi Lawker" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/2.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Editor</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 5 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Andrew Tye" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/6.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Rishi Swaat" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Rossie Kim" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/12.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Users</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 3 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Kim Karlos" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/3.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Katy Turner" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/9.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                title="Peter Adward" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Support</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <p class="mb-0">Total 2 users</p>
                                        <ul class="list-unstyled d-flex align-items-center avatar-group mb-0">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Kim Merchent" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/10.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Sam D'souza" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/13.png"
                                                    alt="Avatar">
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" title="Nurvi Karlos" class="avatar pull-up">
                                                <img class="rounded-circle"
                                                    src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/avatars/15.png"
                                                    alt="Avatar">
                                            </li>
                                            <li class="avatar">
                                                <span class="avatar-initial rounded-circle pull-up text-body"
                                                    data-bs-toggle="tooltip" data-bs-placement="bottom"
                                                    title="3 more">+3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="role-heading">
                                            <h5 class="mb-1">Restricted User</h5>
                                            <a href="javascript:;" data-bs-toggle="modal" data-bs-target="#addRoleModal"
                                                class="role-edit-modal">
                                                <p class="mb-0">Edit Role</p>
                                            </a>
                                        </div>
                                        <a href="javascript:void(0);" class="text-secondary"><i
                                                class="ri-file-copy-line ri-22px"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="card h-100">
                                <div class="row h-100">
                                    <div class="col-5">
                                        <div class="d-flex align-items-end h-100 justify-content-center">
                                            <img src="https://demos.themeselection.com/materio-bootstrap-html-laravel-admin-template/demo/assets/img/illustrations/illustration-3.png"
                                                class="img-fluid" alt="Image" width="80">
                                        </div>
                                    </div>
                                    <div class="col-7">
                                        <div class="card-body text-sm-end text-center ps-sm-0">
                                            <button data-bs-target="#addUser" data-bs-toggle="modal"
                                                class="btn btn-sm btn-primary mb-4 text-nowrap add-new-role">Add
                                                New User</button>
                                            <p class="mb-0">Add user, if it does not exist</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}

                        {{-- <div class="col-12">
                            <h4 class="mt-6 mb-1">Total users with their position</h4>
                            <p class="mb-0">Find all of your company’s administrator accounts and their
                                associate position.</p>
                        </div> --}}
                        <div class="col-12">
                            <!-- Role Table -->
                            <div class="card">

                                <div class="card-header border-bottom">
                                    <h6 class="card-title mb-0">Filters</h6>
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
                                    </div>
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
                                                <div class="me-4">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                        <label><input type="search" class="form-control form-control-sm"
                                                                placeholder="Search User"
                                                                aria-controls="DataTables_Table_0"></label>
                                                    </div>
                                                </div>
                                                <div class="add-new">
                                                    {{-- <button
                                                        class="btn btn-primary waves-effect waves-light"
                                                        data-bs-toggle="offcanvas" data-bs-target="#addUser"><i
                                                            class="ri-add-line me-0 me-sm-1 d-inline-block d-sm-none"></i><span
                                                            class="d-none d-sm-inline-block"> Add New User </span></button> --}}
                                                    <button data-bs-target="#addUser" data-bs-toggle="modal"
                                                        class="btn btn-primary waves-effect waves-light"
                                                        data-bs-toggle="offcanvas">Add
                                                        New User</button>
                                                </div>
                                                {{-- <div class="card-body text-sm-end text-center ps-sm-0">

                                                    <p class="mb-0">Add user, if it does not exist</p>
                                                </div> --}}
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
                                                        <a href="#" class="me-2" title="Delete">
                                                            <i class="ri-delete-bin-line ri-20px"></i>
                                                        </a>

                                                        <!-- View icon -->
                                                        <a href="#" class="me-2" title="View">
                                                            <i class="ri-eye-line ri-20px"></i>
                                                        </a>

                                                        <!-- More options (3 dots) -->
                                                        <a href="#" title="More">
                                                            <i class="ri-more-line ri-20px"></i>
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
