@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">
        <!-- Section: Details -->
        <section class="section section-Details grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12 m6">
                                        <span class="card-title">User Details</span>
                                        @if ($user->email_verified_at !== 1)
                                            <p class="text-red"><span class="text-red"> Email Not Verfied</span> <small>
                                                    <a href="" class="red-error">Send Warning</a></small></p>
                                        @else
                                            <small class="green-user">Email Verfied</small>
                                        @endif
                                    </div>
                                    <div class="col s12 m6 center">
                                        <img src="{{ asset('assets/admin/img/person2.jpg') }}" alt=""
                                            class="responsive-img circle" style="width: 40px; margin-left: 10px;">
                                        <p>Username - {{ $user->name }}</p>
                                        <p>{{ $user->created_at }} </p>
                                    </div>
                                </div>
                                <form action="" method="get">
                                    @csrf
                                    <div class="input-field">
                                        <input type="text" name="name" id="title" value="{{ $user->name }}">
                                        <label for="title">Name</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" name="username" id="title" value="{{ $user->username }}">
                                        <label for="title">Username</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="email" name="email" id="title" value="{{ $user->email }}">
                                        <label for="title">Email</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="password" id="title">
                                        <label for="title">Password</label>
                                    </div>
                                    <div class="input-field">
                                        <input type="password" name="confirmPassword" id="title">
                                        <label for="title">Confirm Password</label>
                                    </div>
                                    <div class="card-action">
                                        <input type="submit" class="btn green" value="Save">
                                        <a class="btn red" href="">Delete</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="section blue darken-2 white-text center">
            <p>Madmin Panel Copyright &copy; 2018</p>
        </footer>


    @stop
