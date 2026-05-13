@extends('layouts.app')

@section('title', 'Enrollments List')


@section('actions')

    <a class="btn btn-add" href="{{ route('enrollments.create') }}">+ Add Enrollment</a>

@endsection

@section('content')

    <div class="panel">
        <div class="panel-header">Enrollment List</div>

        <div class="panel-body no-pad">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student</th>
                        <th>Course</th>
                        <th>Enrolled At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($enrollments as $en)
                        <tr>
                            <td></td>
                            <td>{{ $en->student->name }} </td>
                            <td>{{ $en->course->name }}</td>
                            <td>{{ $en->enrolled_at }} </td>
                            <td>

                                <form action="{{ route('enrollments.destroy', ['enrollment' => $en]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('Are you sure?')">Delete</button>

                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Enrollments Avaliable.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>


@endsection
