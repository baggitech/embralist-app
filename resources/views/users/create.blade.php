@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create User</h1>
        <!-- Add your user creation form here -->
        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <!-- Add your form fields here -->
            <button type="submit" class="btn btn-primary">Create User</button>
        </form>
    </div>
@endsection
