@extends('layouts.app')

@section('title', 'Add Enrollment')

@section('actions')
    <a class="btn" href="{{ route('enrollments.index') }}">Back to Enrollments</a>
@endsection

@section('content')


    <form action="{{ route('enrollments.store') }}" method="POST" class="form">
        @csrf

        <div class="input-group">
            <label for="student_id">Student</label>
            <select id="student_id" type="text" name="student_id">
                <option value="">-- Select Student --</option>
                @foreach ($students as $student)
                    <option value="{{ $student->id }}" @selected(old('student_id') == $student->id)>{{ $student->name }}</option>
                @endforeach
            </select>
            @error('student_id')
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
            <label for="enrolled_at">Enrolled At</label>
            <input id="enrolled_at" type="date" name="enrolled_at" value="{{ old('enrolled_at') }}">
            @error('enrolled_at')
                <p style="color: red;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" class="btn btn-add">
            Save Enrollment
        </button>


    </form>
@endsection
