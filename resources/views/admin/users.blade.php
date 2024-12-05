@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">


        <!-- Section: Users -->
        <section class="section section-users grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Users</span>
                                <form method="">
                                    <input type="search" placeholder="Search User">
                                </form>
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Avatar</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Registered</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td width="70">
                                                <img src="{{ asset("assets/admin/img/person1.jpg")}}" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->created_at }}</td>
                                            <td>
                                                <a href="{{ route('user.details',$user->id) }}" class="btn blue lighten-2">Details</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action">
                                <ul class="pagination">
                                    <li class="dsabled">
                                        <a href="#!" class="blue-text">
                                            <i class="material-icons">chevron_left</i>
                                        </a>
                                    </li>
                                    <li class="active blue lighten-2">
                                        <a href="#!" class="white-text">1</a>
                                    </li>
                                    <li class="waves-effect">
                                        <a href="#!" class="blue-text">2</a>
                                    </li>
                                    <li class="waves-effect">
                                        <a href="#!" class="blue-text">3</a>
                                    </li>
                                    <li class="waves-effect">
                                        <a href="#!" class="blue-text">4</a>
                                    </li>
                                    <li class="waves-effect">
                                        <a href="#!" class="blue-text">5</a>
                                    </li>
                                    <li class="waves-effect">
                                        <a href="#!" class="blue-text">
                                            <i class="material-icons">chevron_right</i>
                                        </a>
                                    </li>
                                </ul>
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

        <!-- Fixed Action Button -->
        <div class="fixed-action-btn">
            <a href="#user-modal" class="modal-trigger btn-floating btn-large red">
                <i class="material-icons">add</i>
            </a>
        </div>

        <!-- Add User Modal -->
        <div id="user-modal" class="modal">
            <div class="modal-content">
                <h4>Add User</h4>
                <form>
                    <div class="input-field">
                        <input type="text" id="name">
                        <label for="name">Name</label>
                    </div>
                    <div class="input-field">
                        <input type="email" id="email">
                        <label for="email">Email</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password">
                        <label for="password">Password</label>
                    </div>
                    <div class="input-field">
                        <input type="password" id="password2">
                        <label for="password2">Confirm Password </label>
                    </div>
                </form>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
                </div>
            </div>
        </div>

    @stop
