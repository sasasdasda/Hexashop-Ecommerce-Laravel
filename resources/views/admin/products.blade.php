@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">
        <!-- Section: Posts -->
        <section class="section section-posts grey lighten-4">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Products</span>
                                <small class="total-small">Total : {{ $product_count }}</small>
                                <table class="striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Image</th>
                                            <th>name</th>
                                            <th>Category</th>
                                            <th>Date Created</th>
                                            <th class="center">Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {{-- Start Foreach --}}
                                        @foreach (($products) as $product)
                                            <tr>
                                                <td>1</td>
                                                <td class="">
                                                    <div class="product-image ">
                                                        <img src="{{ asset('images/'.$product->img)  }}" alt="Image Not Found">
                                                    </div>
                                                </td>
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category_id }}</td>
                                                <td>{{ $product->created_at }}</td>
                                                <td>
                                                    <a href="{{ route('product_details', $product->id) }}"
                                                        class="btn blue lighten-2">Details</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        {{-- End Foreach --}}
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
            <a href="#post-modal" class="modal-trigger btn-floating btn-large red">
                <i class="material-icons">add</i>
            </a>
        </div>

        <!-- Add Post Modal -->
        <div id="post-modal" class="modal">
            <div class="modal-content">
                <h4>Add Post</h4>
                <form>
                    <div class="input-field">
                        <input type="text" id="title">
                        <label for="title">Title</label>
                    </div>
                    <div class="input-field">
                        <select>
                            <option value="" disabled selected>Select Option</option>
                            <option value="1">Web Developement</option>
                            <option value="2">Graphic Design</option>
                            <option value="3">Tech Gadgets</option>
                            <option value="4">Other</option>
                        </select>
                        <label>Category</label>
                    </div>
                    <div class="input-field">
                        <textarea name="body" id="body" class="materialize-textarea"></textarea>
                        <label for="body">Body</label>
                    </div>
                </form>

                <div class="modal-footer">
                    <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
                </div>
            </div>
        </div>
    @stop
