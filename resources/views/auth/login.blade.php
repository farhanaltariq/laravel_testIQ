@extends('layouts.dashboard.header')
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center my-5">

        <div class="col-xl-10 col-lg-12 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        {{-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> --}}
                        <div class="col">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="{{ asset('webSPP') }}/assets/img/icons/logo.png" width="90px" alt="logo">
                                    <h1 class="h4 text-gray-900 mb-4">BPI</h1>
                                </div>
                                <form class="user" action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
@extends('layouts.dashboard.script')