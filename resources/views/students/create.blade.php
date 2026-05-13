@extends('layouts.app')

@section('title', 'Add Student')

@section('actions')
    {{-- Replaced btn-add with standard btn for navigation back action --}}
    <a class="btn" href="{{ route('students.index') }}">Back to Students</a>
@endsection

@section('content')


    <form action="{{ route('students.store') }}" method="POST" class="form">
        @csrf

        <div class="input-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="">Email</label>
            <input type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="">Phone</label>
            <input type="text" name="phone" value="{{ old('phone') }}">
            @error('phone')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-add">
            Save Student
        </button>


    </form>
@endsection
