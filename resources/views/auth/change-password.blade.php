@extends('layouts.app')

@section('title', 'Change Password')

@section('actions')
    <a class="btn" href="{{ route('students.index') }}">Back</a>
@endsection

@section('content')
    <form action="{{ route('password.update') }}" method="POST" class="form">
        @csrf
        @method('PUT')

        <div class="input-group">
            <label>Current Password</label>
            <input type="password" name="current_password">
            @error('current_password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label>New Password</label>
            <input type="password" name="password">
            @error('password')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label>Confirm New Password</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit" class="btn btn-add">Change Password</button>
    </form>
@endsection
