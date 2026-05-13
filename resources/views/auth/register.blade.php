@extends('layouts.app')

@section('title', 'Register User')

@section('actions')
    <a class="btn" href="{{ route('students.index') }}">Back</a>
@endsection

@section('content')
    <form action="{{ route('register.store') }}" method="POST" class="form">
        @csrf

        <div class="input-group">
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label>Confirm Password</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-add">Register User</button>
    </form>
@endsection
