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
                                        <span class="card-title">Post Details</span>
                                        @if ($post->approve === 1)
                                            <small class="green-user">Product Approved</small>
                                        @else
                                            <small class="red-error">Product Rejected</small>
                                        @endif
                                    </div>
                                    <div class="col s12 m6 center">
                                        <img src="{{ asset('assets/admin/img/person2.jpg') }}" alt=""
                                            class="responsive-img circle" style="width: 40px; margin-left: 10px;">
                                        <p>Posted By - John Doe</p>
                                        <p>On Jan 12, 2018 </p>
                                    </div>
                                </div>
                                <form>
                                    <div class="input-field">
                                        <input type="text" id="title" value="{{ $post->title }}">
                                        <label for="title">Title</label>
                                    </div>
                                    <div class="input-field">
                                        <select>
                                            <option value="" disabled>Select Option</option>
                                            <option value="1" selected>Web Developement</option>
                                            <option value="2">Graphic Design</option>
                                            <option value="3">Tech Gadgets</option>
                                            <option value="4">Other</option>
                                        </select>
                                        <label>Category</label>
                                    </div>
                                    <div class="input-field">
                                        <textarea name="body" id="body" class="materialize-textarea">{{ $post->body }}</textarea>
                                        <label for="">Description</label>
                                    </div>
                                </form>
                            </div>
                            <div class="card-action">
                                <button class="btn green">Save</button>
                                <button class="btn red">Delete</button>
                                @if ($post->approve === 0)
                                    <button class="btn warning" value="1">Approve</button>
                                @else
                                    <button class="btn orange" value="0">Deny</button>
                                @endif
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
