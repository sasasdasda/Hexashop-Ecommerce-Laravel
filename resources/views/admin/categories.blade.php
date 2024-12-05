@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">

        <!-- Section: Categories -->
        <section class="section section-categories grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Categories</span>
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Date Created</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($categories as $category)
                                            <tr>
                                                <td>{{ $category->name }}</td>
                                                <td>{{ $category->created_at }}</td>
                                                <td>
                                                    <a href="details.html" class="btn blue lighten-2">Details</a>
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

        <!-- Fixed Action Button -->
        <div class="fixed-action-btn">
            <a href="#category-modal" class="modal-trigger btn-floating btn-large red">
                <i class="material-icons">add</i>
            </a>
        </div>

        <!-- Add Category Modal -->
        <div id="category-modal" class="modal">
            <div class="modal-content">
                <h4>Add Category</h4>
                <form>
                    <div class="input-field">
                        <input type="text" id="title">
                        <label for="title">Title</label>
                    </div>
                </form>
                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
                </div>
            </div>
        </div>

    @stop
