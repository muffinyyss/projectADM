@extends('layouts.blankLayout')

@section('title', 'Login')

@section('page-style')
    @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
    {{-- <style>
        .form-floating>label {
            /* background-color: white; */
            padding: 0 0.25rem;
            top: -0.6rem;
            left: 0.75rem;
            z-index: 1;
            color: #495057;
            font-size: 0.85rem;
            transition: all 0.2s ease-in-out;
        }

        .form-floating>.form-control {
            padding-top: 1.5rem;
        }
    </style> --}}
@endsection

@section('content')
    <div class="position-relative">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6 mx-4">

                <!-- Login -->
                <div class="card p-7">
                    <!-- Logo -->
                    {{-- <div class="app-brand justify-content-center mt-5">
        <a href="{{url('/')}}" class="app-brand-link gap-3">
        <span class="app-brand-logo demo">@include('_partials.macros', ["height" => 20, "withbg" => 'fill:
          #fff;'])</span>
        <span class="app-brand-text demo text-heading fw-semibold">{{config('variables.templateName')}}</span>
        </a>
      </div> --}}
                    <!-- /Logo -->

                    <div class="card-body mt-1 rounded-5">
                        <h4 class="mb-1">Welcome to Account 4.0! 👋🏻</h4>
                        <p class="mb-5">Please sign-in to your account and start the adventure</p>

                        <form id="formAuthentication" class="mb-5" action="{{ route('login.perform') }}" method="POST">
                            @csrf
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('site') is-invalid @enderror"
                                    id="site" name="site" value="{{ old('site') }}" placeholder="Enter your site"
                                    autofocus required />
                                <label for="site">Site name</label>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="text" class="form-control @error('username') is-invalid @enderror"
                                    id="username" name="username" value="{{ old(key: 'username') }}"
                                    placeholder="Enter your username" autofocus required />
                                <label for="username">Username</label>
                            </div>

                            <div class="mb-5">
                                <div class="form-password-toggle">
                                    <div class="input-group input-group-merge">
                                        <div class="form-floating">
                                            {{-- @error('password')
                                                <div class="text-danger mb-1">{{ $message }}</div>
                                            @enderror --}}
                                            <input type="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                value="{{ old('password') }}"
                                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                aria-describedby="password" required />
                                            <label for="password">Password</label>
                                        </div>
                                        <span
                                            class="input-group-text cursor-pointer @error('password') btn btn-outline-danger @enderror">
                                            <i class="ri-eye-off-line ri-20px"></i>
                                        </span>
                                        {{-- <span class="input-group-text cursor-pointer"
                                            style="@error('password') color:#dc3545 @enderror">
                                            <i class="ri-eye-off-line ri-20px"></i>
                                        </span> --}}

                                    </div>
                                </div>
                            </div>

                            {{-- <div class="mb-5 pb-2 d-flex justify-content-between pt-2 align-items-center">
          <div class="form-check mb-0">
          <input class="form-check-input" type="checkbox" id="remember-me">
          <label class="form-check-label" for="remember-me">
            Remember Me
          </label>
          </div>

          <a href="{{url('auth/forgot-password-basic')}}" class="float-end mb-1">
          <span>Forgot Password?</span>
          </a>
        </div> --}}

                            <div class="mb-5">
                                <button class="btn btn-primary d-grid w-100" type="submit">login</button>
                            </div>
                        </form>

                        {{-- <p class="text-center mb-5">
        <span>New on our platform?</span>
        <a href="{{url('auth/register-basic')}}">
          <span>Create an account</span>
        </a>
        </p> --}}
                    </div>
                </div>
                <!-- /Login -->

                <img src="{{ asset('assets/img/illustrations/tree-3.png') }}" alt="auth-tree
       "
                    class="authentication-image-object-left d-none d-lg-block">
                <img src="{{ asset('assets/img/illustrations/auth-basic-mask-light.png') }}
    "
                    class="authentication-image d-none d-lg-block" height="172" alt="triangle-bg">
                <img src="{{ asset('assets/img/illustrations/tree.png') }}" alt="auth-tree"
                    class="authentication-image-object-right d-none d-lg-block">
            </div>
        </div>
    </div>
@endsection



@section('page-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputsOrder = ['site', 'username', 'password'];

            for (const id of inputsOrder) {
                const inputElem = document.getElementById(id);
                if (inputElem && inputElem.classList.contains('is-invalid')) {
                    inputElem.value = ''; // ล้างข้อมูลช่องที่ผิด
                    inputElem.focus(); // ตั้ง focus ไปที่ช่องนั้น
                    break; // เลิกเช็คต่อหลังพบช่องแรกที่ผิด
                }
            }
        });
    </script>
@endsection
