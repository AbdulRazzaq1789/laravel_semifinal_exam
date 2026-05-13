@extends('layouts.app')

@section('title', 'Edit Course')

@section('actions')
    {{-- Replaced btn-add with standard btn for navigation back action --}}
    <a class="btn" href="{{ route('courses.index') }}">Back to Courses</a>
@endsection

@section('content')
    <form action="{{ route('courses.update', $course) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        {{-- Name Input --}}
        <div class="input-group @error('name') has-error @enderror">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $course->name) }}">
            @error('name')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email Input --}}
        <div class="input-group @error('code') has-error @enderror">
            <label for="code">Code</label>
            <input type="code" id="code" name="code" value="{{ old('code', $course->code) }}">
            @error('code')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        {{-- Phone Input --}}
        <div class="input-group @error('description') has-error @enderror">
            <label for="description">Description</label>
            <input type="text" id="description" name="description"
                value="{{ old('description', $course->description) }}">
            {{-- Fixed value reference to 'description' --}}
            @error('description')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-add">Update Course</button>
    </form>
@endsection
