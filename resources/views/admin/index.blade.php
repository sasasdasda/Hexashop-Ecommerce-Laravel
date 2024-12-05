@include('admin.AdLayout.AdLayout')
{{-- @section('content') --}}

<body class="grey lighten-4">
    @if(Session::has('success'))
        <div class="alert-success-own">{{ Session::get('success') }}</div>
    @endif
    <!-- Section: Stats -->

    <section class="section section-stats center">

        {{-- @foreach ($user as $s)
            <p>{{ $s->email }}</p>
            <p>{{ $s->password }}</p>
        @endforeach --}}

        {{-- {{ $user->email }} --}}

        {{-- @foreach ($all_product as $all_product)
        @endforeach --}}
        <div class="row">
            <div class=" col s12 m6 l3">
                <div class="card-panel blue lighten-1 white-text center">
                    <i class="material-icons medium">
                        <h4>Products</h4>
                    </i>
                    <h6>Total Products</h6>
                    <h3 class="count">{{ $all_product }}</h3>
                    <div class="progress grey lighten-1">
                        <div class="determinate white" style="width:40%;"></div>
                    </div>
                </div>
            </div>
            <div class=" col s12 m6 l3">
                <div class="card-panel center">
                    <i class="material-icons medium">
                        <h4>Posts</h4>
                    </i>
                    <h6>Blog Post</h6>
                    <h3 class="count">{{ $all_posts }}</h3>
                    <div class="progress grey lighten-1">
                        <div class="determinate blue lighten-1" style="width:20%;"></div>
                    </div>
                </div>
            </div>
            <div class=" col s12 m6 l3">
                <div class="card-panel blue lighten-1 white-text center">
                    <i class="material-icons medium">
                        <h4>Comments</h4>
                    </i>
                    <h6>Total Comments</h6>
                    <h3 class="count">{{ $all_comments }}</h3>
                    <div class="progress grey lighten-1">
                        <div class="determinate white" style="width:40%;"></div>
                    </div>
                </div>
            </div>
            <div class=" col s12 m6 l3">
                <div class="card-panel center">
                    <i class="material-icons medium">
                        <h4>Accounts</h4>
                    </i>
                    <h6>Total Users</h6>
                    <h3 class="count">{{ $all_users }}</h3>
                    <div class="progress grey lighten-1">
                        <div class="determinate blue lighten-1" style="width:10%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section-Visitors -->
    <section class="section section-visitors blue lighten-4">
        <div class="row">
            <div class="col s12 m6 l8">
                <div class="card-panel">
                    <div id="chartContainer" style="height: 300px; width: 100%">

                    </div>
                </div>
            </div>

            <div class="col s12 m6 l4">
                <!-- latest comments -->
                <ul class="collection with-header latest-comments">
                    <li class="collection-header">

                        <h5>Latest Comments</h5>
                        <i><small>Shop</small></i>
                    </li>
                    @if (isset($shop_comment))
                        @foreach ($shop_comment as $_3_)
                            <li class="collection-item avatar">
                                <img src="{{ asset('assets/admin/img/person1.jpg') }}" alt="persone1.jpg"
                                    class="circle">
                                <span class="title">John Doe</span>
                                <p class="truncate">
                                    {{ $_3_->comment }}
                                </p>
                                <a href="" class="approve green-text">Approve</a> |
                                <a href="" class="deny red-text">Deny</a>
                            </li>
                        @endforeach
                    @endif
                    <li class="collection-header center">
                        <a href="{{ route('comments') }}">More</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section: Recent Posts and Todos -->
    <section class="section section-recent">
        <div class="row">
            <div class="col s12 l8 m6">
                <div class="card">
                    <div class="card-content">
                        <span class="title">Recent Posts</span>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Created</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->category_id }}</td>
                                        <td>{{ $post->created_at }}</td>
                                        <td>
                                            <a href="{{ route('details', $post->id) }}"
                                                class="btn blue lighten-2">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>



                    <br>
                    <hr>



                    <div class="card-content">
                        <span class="title">Recent Products</span>
                        <table class="striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Create</th>
                                    <th>Control</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->name }}</td>
                                        <td>${{ $product->price }}</td>
                                        <td>{{ $product->category_id }}</td>
                                        <td>{{ $product->created_at }}</td>
                                        <td>
                                            <a href="{{ route('product_details', $product->id) }}"
                                                class="btn blue lighten-2">Details</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>


















                </div>
            </div>
            <div class="col s12 m6 l4">
                <div class="card">
                    <ul class="collection with-header latest-comments">
                        <li class="collection-header">
                            <h5>Latest Comments</h5>
                            <i><small>Blog</small></i>
                        </li>
                        @if (isset($blog_comment))
                            @foreach ($blog_comment as $_3_)
                                <li class="collection-item avatar">
                                    <img src="{{ asset('assets/admin/img/person1.jpg') }}" alt="persone1.jpg"
                                        class="circle">
                                    <span class="title">John Doe</span>
                                    <p class="truncate">
                                        {{ $_3_->comment }}
                                    </p>
                                    <a href="" class="approve green-text">Approve</a> |
                                    <a href="" class="deny red-text">Deny</a>
                                </li>
                                <li class="collection-header center">
                                    <a href="{{ route('comments') }}">More</a>
                                </li>
                            @endforeach
                        @endif
                    </ul>


                    <br>
                    <hr>

                    <div class="card-content">
                        <span class="card-title">Quick Todos</span>
                        <form {{-- id="todo-formss"  --}} method="post" action="{{ route('create.todo') }}">
                            @csrf
                            <div class="input-field">
                                @error('tod')
                                    <small class="red-error">{{ $message }}</small>
                                @enderror
                                <input type="text" name="tod" id="todo" placeholder="Add Todo...">
                            </div>
                        </form>
                        <form action="{{ route('result', $res) }}" method="get">
                            {{-- @csrf --}}
                            @error('result')
                                <small class="red-error">{{ $message }}</small>
                            @enderror
                            <br>

                            <input type="small" name="result" class="result" value="{{ $res }}">
                            Result
                        </form>
                        @error('tod')
                            <small>{{ $message }}</small>
                        @enderror

                        <ul class="collection todos">
                            @if (isset($todos))
                                @foreach ($todos as $todo)
                                    <li class="collection-item">
                                        <div> {{ $todo->name }}
                                            <a href="{{ route('delete.todo', $todo->id) }}"
                                                class="secondary-content">
                                                <i class="material-icons">close</i>
                                            </a>
                                        </div>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
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
        <a class="btn-floating btn-large red">
            <i class="material-icons">add</i>
        </a>
        <ul>
            <li>
                <a href="#product-modal" class="btn-floating blue modal-trigger">
                    <i class="material-icons">Post</i>
                </a>
            </li>
            <li>
                <a href="#post-modal" class="btn-floating blue modal-trigger">
                    <i class="material-icons">mode_edit</i>
                </a>
            </li>
            <li>
                <a href="#category-modal" class="btn-floating blue modal-trigger">
                    <i class="material-icons">folder</i>
                </a>
            </li>
            <li>
                <a href="#user-modal" class="btn-floating blue modal-trigger">
                    <i class="material-icons">supervisor_account</i>
                </a>
            </li>
        </ul>
    </div>
    <!-- Add Product Modal -->
    <div id="product-modal" class="modal">
        <div class="modal-content">
            <h4>Add Product</h4>
            <form method="post" action="{{ route('create.product') }}" enctype="multipart/form-data">
                @csrf
                <div class="input-field">
                    <input type="text" name="product_name" id="title">
                    <label for="title">Name</label>
                    @error('product_name')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="file" name="product_image" id="title">
                    {{-- <label for="title">Name</label> --}}
                    <br>
                    @error('product_image')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="file" name="product_image_2" id="title">
                    {{-- <label for="title">Name</label> --}}
                    <br>
                    @error('product_image')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="text" name="product_price" id="title">
                    <label for="title">Price</label>
                    @error('product_price')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <small class="green-user">User Have This Product</small>
                    <input type="text" placeholder="Current Admin User " name="product_price" id="title"
                        disabled>
                    {{-- <label for="title">User</label> --}}
                </div>
                <div class="input-field">
                    <select name="product_category">
                        <option value="" disabled selected>Select Option</option>
                        <option value="1">Web Developement</option>
                        <option value="2">Graphic Design</option>
                        <option value="3">Tech Gadgets</option>
                        <option value="4">Other</option>
                    </select>
                    <label>Category</label>
                    @error('product_category')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <textarea name="product_description" id="body" class="materialize-textarea"></textarea>
                    <label for="body">Description</label>
                    @error('product_description')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="modal-footer">
                    <input type="submit" class="modal-action modal-close btn blue white-text" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <!-- Add Post Modal -->
    <div id="post-modal" class="modal">
        <div class="modal-content">
            <h4>Add Post</h4>
            <form method="post" action="{{ route('create.post') }}">
                @csrf
                <div class="input-field">
                    <input type="text" name="post_title" id="title">
                    <label for="title">Title</label>
                    @error('post_title')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <select name="select_category">
                        <option value="" disabled selected>Select Option</option>
                        <option value="1">Web Developement</option>
                        <option value="2">Graphic Design</option>
                        <option value="3">Tech Gadgets</option>
                        <option value="4">Other</option>
                    </select>
                    <label>Category</label>
                    @error('select_category')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <textarea name="post_body" id="body" class="materialize-textarea"></textarea>
                    <label for="body">Body</label>
                    @error('post_body')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="modal-footer">
                    <input type="submit" class="modal-action modal-close btn blue white-text" value="Submit">
                </div>
            </form>
        </div>
    </div>

    <!-- Add Category Modal -->
    <div id="category-modal" class="modal">
        <div class="modal-content">
            <h4>Add Category</h4>
            <form method="post" action="{{ route('create.category') }}">
                @csrf
                <div class="input-field">
                    <input type="text" name="title" id="title">
                    <label for="title">Title</label>
                    @error('title')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="text" name="description" id="title">
                    <label for="title">Description</label>
                    @error('description')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="modal-footer">
                    <input type="submit" class="modal-action modal-close btn blue white-text" value="Submit">
                </div>
            </form>
        </div>
    </div>



    <!-- Add User Modal -->
    <div id="user-modal" class="modal">
        <div class="modal-content">
            <h4>Add User</h4>
            <form method="post" action="{{ route('create.user') }}">
                @csrf
                <div class="input-field">
                    <input type="text" name="name" id="name">
                    <label for="name">Name</label>
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="text" name="firstname" id="firstname">
                    <label for="firstname">First Name</label>
                    @error('firstname')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="text" name="lastname" id="lastname">
                    <label for="lastname">Last Name</label>
                    @error('lastname')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="email" name="email" id="email">
                    <label for="email">Email</label>
                    @error('email')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="password" name="password1" id="password">
                    <label for="password">Password</label>
                    @error('password2')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="input-field">
                    <input type="text" name="password2" id="password2">
                    <label for="password2">Confirm Password </label>
                    @error('password2')
                        <small class="red-error">{{ $message }}</small>
                    @enderror
                </div>
                <div class="modal-footer">
                    <input type="submit" class="modal-action modal-close btn blue white-text" value="Submit">
                </div>
            </form>
        </div>

    </div>
    {{-- @stop --}}
