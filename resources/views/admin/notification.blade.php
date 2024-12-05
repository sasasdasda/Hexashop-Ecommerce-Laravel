@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">

        <!-- Section: Comments -->
        <section class="section section-comments grey lighten-4">
            <div class="container">
                <h3>Notification</h3>
                <h6>All Notification : 999</h6>
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Shop Tickets</span>
                                <small class="total-small-text">Users can Contact You In This Page</small><br>
                                <small class="total-small">Total : 999</small>
                                <table class="striped">
                                    <tbody>
                                        @forelse ($notification as $notification)
                                            <tr>
                                                <td width="70">
                                                    <img src="{{ profile_image($notification->user_id) }}" alt="" class="responsive-img circle"
                                                        style="width: 40px;height: 40px; margin-left: 10px;">
                                                </td>
                                                <td>{{ $notification->message }}</td>
                                                <td>
                                                    <a href="#" class="green-text">
                                                        <i class="material-icons">done</i>
                                                    </a>
                                                    <a href="#" class="red-text">
                                                        <i class="material-icons">close</i>
                                                    </a>
                                                </td>
                                            </tr>
                                        @empty
                                            <div class="alert alert-danger" style="background: rgba(255, 205, 98, 0.993);padding:10px 20px;border-radius:5px;color:rgb(255, 60, 0);font-size:1.15rem">Sorry There's No Notification For You.</div>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-action">
                                <ul class="pagination">
                                    <li class="dsabled">
                                        <a href="#!" class="blue-text">
                                            <i class="material-icons">left</i>
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
                                            <i class="material-icons">right</i>
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

    @stop
