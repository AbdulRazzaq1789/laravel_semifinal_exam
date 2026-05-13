@extends('layouts.app')

@section('title', 'Add Course')

@section('actions')
    {{-- Replaced btn-add with standard btn for navigation back action --}}
    <a class="btn" href="{{ route('courses.index') }}">Back to Courses</a>
@endsection

@section('content')


    <form action="{{ route('courses.store') }}" method="POST" class="form">
        @csrf

        <div class="input-group">
            <label for="">Name</label>
            <input type="text" name="name" value="{{ old('name') }}">
            @error('name')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="">code</label>
            <input type="text" name="code" value="{{ old('code') }}">
            @error('code')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="">Description</label>
            <input type="text" name="description" value="{{ old('description') }}">
            @error('description')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-add">
            Save Course
        </button>


    </form>
@endsection
