@extends('admin.AdLayout.AdLayout')
@section('content')

    <body class="grey lighten-4">

        <!-- Section: Comments -->
        <section class="section section-comments grey lighten-4">
            <div class="container">
                <h3>Website</h3>
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <span class="card-title">Website Setting</span>
                                <table class="striped">
                                    <tbody>
                                        <tr>
                                            <td width="70">
                                                <img src="{{ asset('assets/admin/img/person1.jpg') }}" alt="" class="responsive-img"
                                                    style="width: 40px; margin-left: 10px;">
                                            </td>
                                            <td><form {{-- id="todo-formss"  --}} method="post" action="{{ route('create.todo') }}">
                                                @csrf
                                                <div class="input-field">
                                                    @error('tod')
                                                        <small class="red-error">{{ $message }}</small>
                                                    @enderror
                                                    <input type="file" name="tod" id="todo" placeholder="Add Todo...">
                                                </div>
                                            </form></td>
                                            <td>
                                                <a href="" class="btn btn-primary">Upload</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                {{ $website_name->value }}
                                            </td>
                                            <td><div class="input-field">
                                                <input type="text" name="WebsiteName" id="lastname">
                                                <label for="lastname">Website Name</label>
                                                @error('lastname')
                                                    <small class="red-error">{{ $message }}</small>
                                                @enderror
                                            </div></td>
                                            <td>
                                                <a href="" class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                {{ $phone_number->value }}
                                            </td>
                                            <td><div class="input-field">
                                                <input type="text" name="WebsiteName" id="lastname">
                                                <label for="lastname">Phone</label>
                                                @error('lastname')
                                                    <small class="red-error">{{ $message }}</small>
                                                @enderror
                                            </div></td>
                                            <td>
                                                <a href="" class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="160">
                                                North Miami Beach
                                            </td>
                                            <td>
                                                <div class="input-field">
                                                    <input type="text" name="WebsiteName" id="lastname">
                                                    <label for="lastname">Office Location</label>
                                                    @error('lastname')
                                                        <small class="red-error">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="160">
                                                North Miami Beach
                                            </td>
                                            <td>
                                                <div class="input-field">
                                                    <input type="text" name="WebsiteName" id="lastname">
                                                    <label for="lastname">Store Location</label>
                                                    @error('lastname')
                                                        <small class="red-error">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="160">
                                                07:30 AM - 9:30 PM Daily
                                            </td>
                                            <td>
                                                <div class="input-field">
                                                    <input type="text" name="WebsiteName" id="lastname">
                                                    <label for="lastname">Work Hours</label>
                                                    @error('lastname')
                                                        <small class="red-error">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td>
                                                <a href="" class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="70">
                                                Email
                                            </td>
                                            <td>
                                                <div class="input-field">
                                                    <input type="text" name="WebsiteName" id="lastname">
                                                    <label for="lastname">Website Email</label>
                                                    @error('lastname')
                                                        <small class="red-error">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                            </td>
                                            <td >
                                                <a href="" class="btn btn-primary">Update</a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
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
