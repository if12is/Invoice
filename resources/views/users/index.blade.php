@extends('layouts/master')

@section('title', 'Users')

@section('styles')
    <style>
        .font-figtree {
            font-family: 'figtree', sans-serif;
        }
    </style>

@endsection

@section('content')

    <div class="container-fluid">
        <div class="row justify-content-center text-center">
            <div class="col-12">
                <h1 class="text-4xl font-bold text-gray-800 font-figtree">Laravel | Users</h1>
                <p class="text-lg text-gray-600">Welcome to your Laravel application!</p>
            </div>
            <div class="col-8 m-auto">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
