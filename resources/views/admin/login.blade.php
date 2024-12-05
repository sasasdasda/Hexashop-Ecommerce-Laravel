<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/css/materialize.min.css') }}"
        media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/admin/css/main.css') }}" />

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Custom Materialize Theme</title>
</head>


<body class="grey lighten-4">
    <nav class="blue darken-2">
        <div class="container">
            <div class="nav-wrapper">
                <a href="index.html" class="brand-logo">Madmin</a>
            </div>
        </div>
    </nav>

    <section class="section section-login">
        <div class="container">
            <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
                    <div class="card-panel login blue darken-2 white-text center">
                        <h3>Madmin Login</h3>
                        <form action="{{ route('admin.login.check') }}" method="POST">
                            @csrf
                            <div class="input-field">
                                <input type="email" name="email" id="email">
                                <label for="email" class="white-text">
                                    <h6>Email</h6>
                                </label>
                            </div>
                            <div class="input-field">
                                <input type="password" name="password" id="password">
                                <label for="password" class="white-text">
                                    <h6>Password</h6>
                                </label>
                            </div>
                            <input type="submit" value="Login"
                                class="btn btn-large btn-extended grey lighten-4 black-text">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="section blue darken-2 white-text center">
        <p>Madmin Panel Copyright &copy; 2018</p>
    </footer>


    @extends('admin.AdLayout.footer')
