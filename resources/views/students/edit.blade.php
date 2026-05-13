@extends('layouts.app')

@section('title', 'Edit Student')

@section('actions')
    {{-- Replaced btn-add with standard btn for navigation back action --}}
    <a class="btn" href="{{ route('students.index') }}">Back to Students</a>
@endsection

@section('content')
    <form action="{{ route('students.update', $student) }}" method="POST" class="form">
        @csrf
        @method('PUT')

        {{-- Name Input --}}
        <div class="input-group @error('name') has-error @enderror">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ old('name', $student->name) }}">
            @error('name')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        {{-- Email Input --}}
        <div class="input-group @error('email') has-error @enderror">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="{{ old('email', $student->email) }}">
            @error('email')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        {{-- Phone Input --}}
        <div class="input-group @error('phone') has-error @enderror">
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" value="{{ old('phone', $student->phone) }}">
            {{-- Fixed value reference to 'phone' --}}
            @error('phone')
                <p class="error-msg">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-add">Update Student</button>
    </form>
@endsection
