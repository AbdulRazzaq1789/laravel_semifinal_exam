@extends('layouts.app')

@section('title', 'Student Details')

@section('actions')

@endsection

@section('content')
    <h1>Student Details</h1>

    <p>
        <strong>Name:</strong>
        {{ $student->name }}
    </p>

    <p>
        <strong>Email:</strong>
        {{ $student->email }}
    </p>

    <p>
        <strong>Phone:</strong>
        {{ $student->phone ?? 'Not provided' }}
    </p>

    <hr>

    <h2>Enrolled Courses</h2>

    @forelse ($student->enrollments as $enrollment)
        <p>
            <strong>{{ $enrollment->course->code }}</strong>
            -
            {{ $enrollment->course->name }}

            <br>

            <small>
                Enrolled at:
                {{ $enrollment->enrolled_at ?? 'Not specified' }}
            </small>
        </p>
    @empty
        <p>This student is not enrolled in any course.</p>
    @endforelse
@endsection
