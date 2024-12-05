<nav class="blue darken-2">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.html" class="brand-logo">Madmin</a>
            <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li class="active">
                    <a href="{{ route('dashboard') }}">Dashboard</a>
                </li>
                <li>
                    <a href="{{ route('admin_products') }}">Tables</a>
                </li>

                <li>
                    <a href="{{ route('categories') }}">Categories</a>
                </li>
                <li>
                    <a href="{{ route('comments') }}">Comments</a>
                </li>
                <li>
                    <a href="{{ route('users') }}">Users</a>
                </li>
            </ul>
            <!-- Side-nav -->
            <ul id="side-nav" class="side-nav">
                <li>
                    <div class="user-view">
                        <div class="background">
                            <img src="{{ asset('assets/admin/img/ocean.jpg') }}" alt="ocean-background">
                        </div>
                        <a href="#">
                            <img src="{{ asset('assets/admin/img/person1.jpg') }}" alt="person1.jpg" class="circle">
                        </a>
                        <a href="#" class="name white-text">
                            <span>
                                @if (Session::has('Admin'))
                                    {{ Session::get('Admin') }}
                                @else
                                    {{ auth('admin')->user()->username }}
                                @endif
                            </span>
                        </a>
                        <a href="#" class="email white-text">
                            <span>{{ auth('admin')->user()->email }}</span>
                        </a>
                    </div>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}">
                        <i class="material-icons">Dashboard</i> </a>
                </li>
                <li>
                    <a href="{{ route('admin_products') }}">Notification</a>
                </li>
                <li>
                    <a href="{{ route('admin_products') }}">Products</a>
                </li>
                <li>
                    <a href="{{ route('categories') }}">Categories</a>
                </li>
                <li>
                    <a href="{{ route('comments') }}">Comments</a>
                </li>
                <li>
                    <a href="{{ route('users') }}">Users</a>
                </li>
                <li>
                    <a href="{{ route('home') }}">View Site</a>
                </li>
                <li>
                    <a href="{{ route('notification') }}">Notification</a>
                </li>
                <li>
                    <a href="{{ route('site.edit') }}">Edit Site</a>
                </li>


                <li>
                    <div class="divider"></div>
                </li>
                <li>
                    <a href="{{ route('users') }}">Settings</a>
                </li>
                <li>
                    <div class="divider"></div>
                </li>
                <li>
                    <a class="subheader">Account Control</a>
                </li>
                <li>
                    <a href="{{ route('admin.logout') }}" class="waves-effect">Logout</a>
                </li>
            </ul>
            </a>
        </div>
    </div>
</nav>
<!-- Preloader -->
<div class="loader preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
        <div class="circle-clipper left">
            <div class="circle"></div>
        </div>
        <div class="gap-patch">
            <div class="circle"></div>
        </div>
        <div class="circle-clipper right">
            <div class="circle"></div>
        </div>
    </div>
</div>
@if (Session::has('Admin'))
    {{-- {{  return redirect()->route('dashboard'); }} --}}
    <div class="alert-green">
        Welcome!
        {{ Session::get('Admin') }}
        You Are Logged In
    </div>
@endif

@if (Session::has('success'))
    {{-- {{  return redirect()->route('dashboard'); }} --}}
    <div class="alert-green">
        {{ Session::get('success') }}
    </div>
@endif
