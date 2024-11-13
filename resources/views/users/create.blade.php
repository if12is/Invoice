@extends('layouts/master')

@section('title', 'Create a new user')

@section('styles')
    <style>
        .font-figtree {
            font-family: 'figtree', sans-serif;
        }
    </style>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column align-items-center justify-content-center vh-100">
                    <div class="text-center">
                        <h1 class="display-4 font-weight-bold">Laravel | Create A New User</h1>
                        <p class="lead">Welcome to your Laravel application!</p>
                    </div>
                    <div
                        class="mt-4 d-flex justify-content-center align-items-center w-50 bg-dark text-light shadow p-4 rounded m-auto">
                        <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data" class="w-100">
                            @csrf
                            @method('POST')

                            <div class="form-group mt-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" id="name"
                                    class="form-control @error('name') is-invalid @enderror" />
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" name="email" id="email"
                                    class="form-control @error('email') is-invalid @enderror" />
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" id="password"
                                    class="form-control @error('password') is-invalid @enderror" />
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password_confirmation" class="form-label">Confirm Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror" />
                                @error('password_confirmation')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary w-100 mt-4">Register</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        console.log('Hello from the create view');
    </script>
@endsection
