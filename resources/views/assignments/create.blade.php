@extends('layouts.app')

@section('title', 'Add Assignment')

@section('actions')
    {{-- Replaced btn-add with standard btn for navigation back action --}}
    <a class="btn" href="{{ route('assignments.index') }}">Back to Assignments</a>
@endsection

@section('content')


    <form action="{{ route('assignments.store') }}" method="POST" class="form">
        @csrf

        <div class="input-group">
            <label for="">Title</label>
            <input type="text" name="title" value="{{ old('title') }}">
            @error('title')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="course_id">Course</label>
            <select id="course_id" type="text" name="course_id" value="{{ old('course') }}">
                <option value="">-- Select Course --</option>
                @foreach ($courses as $course)
                    <option value="{{ $course->id }}" @selected(old('course_id') == $course->id)>{{ $course->name }}</option>
                @endforeach
            </select>
            @error('course_id')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>


        <div class="input-group">
            <label for="">Deadline</label>
            <input type="date" name="deadline" value="{{ old('deadline') }}">
            @error('deadline')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <div class="input-group">
            <label for="">Total Marks</label>
            <input type="number" name="total_marks" value="{{ old('total_marks') }}">
            @error('total_marks')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-add">
            Save Assignment
        </button>


    </form>
@endsection
