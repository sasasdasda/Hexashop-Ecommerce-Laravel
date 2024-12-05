@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">

        <!-- Section: Comments -->
        <section class="section section-comments grey lighten-4">
            <div class="container">
                <h3>Comments</h3>
                <h6>All Comment : {{ $all_comments }}</h6>
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Shop Comments</span>
                                <small class="total-small">Total : {{ $shop_comment_count }}</small>
                                <table class="striped">
                                    <tbody>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person1.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person2.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person3.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person4.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
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
                {{-- ----------------------------------------------------------- --}}
                {{-- ----------------------------------------------------------- --}}
                {{-- ----------------------------------------------------------- --}}
                {{-- Start Blog Comments --}}
                {{-- ----------------------------------------------------------- --}}
                {{-- ----------------------------------------------------------- --}}
                {{-- ----------------------------------------------------------- --}}
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Blog Comments</span>
                                <small class="total-small">Total : {{ $blog_comment_count }}</small>
                                <table class="striped">
                                    <tbody>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person1.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person2.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person3.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                <img src="img/person4.jpg" alt="" class="responsive-img circle"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur,
                                                deleniti.</td>
                                            <td>
                                                <a href="#" class="green-text">
                                                    <i class="material-icons">done</i>
                                                </a>
                                                <a href="#" class="red-text">
                                                    <i class="material-icons">close</i>
                                                </a>
                                            </td>
                                        </tr>
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
