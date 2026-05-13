@extends('layouts.app')

@section('title', 'Course List')

@section('actions')

    <a class="btn btn-add" href="{{ route('courses.create') }}">+ Add Course</a>

@endsection

@section('content')

    <div class="panel">
        <div class="panel-header">Course List</div>

        <div class="panel-body no-pad">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td></td>
                            <td>{{ $course->name }} </td>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->description }} </td>
                            <td>
                                <a class="btn btn-edit" href="{{ route('courses.edit', $course) }}">Edit</a>

                                <form action="{{ route('courses.destroy', ['course' => $course]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('Are you sure?')">Delete</button>

                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Course Avaliable.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>


@endsection
