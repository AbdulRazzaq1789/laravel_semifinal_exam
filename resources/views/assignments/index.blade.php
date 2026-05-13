@extends('layouts.app')

@section('title', 'Assignments List')

@section('actions')

    <a class="btn btn-add" href="{{ route('assignments.create') }}">+ Add Assignment</a>

@endsection

@section('content')
    <div class="panel">
        <form action="{{ route('assignments.index') }}" method="GET" class="search-query-form">
            <input type="text" name="search" placeholder="Search assignment..." value="{{ $search }}">

            <button class="btn btn-info" type="submit">Search</button>

            @if ($search)
                <a class="btn btn-edit" href="{{ route('assignment.index') }}">Clear</a>
            @endif
        </form>

    </div>

    <div class="panel">
        <div class="panel-header">Assignments List</div>

        <div class="panel-body no-pad">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Course</th>
                        <th>Deadline</th>
                        <th>Total Marks</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($assignments as $assignment)
                        <tr>
                            <td></td>
                            <td>{{ $assignment->title }} </td>
                            <td>{{ $assignment->course->name }}</td>
                            <td>{{ $assignment->deadline }} </td>
                            <td>{{ $assignment->total_marks }} </td>
                            <td>
                                <a class="btn btn-edit" href="{{ route('assignments.edit', $assignment) }}">Edit</a>

                                <form action="{{ route('assignments.destroy', ['assignment' => $assignment]) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('Are you sure?')">Delete</button>

                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Assignment Avaliable.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div class="pagination-wrapper" style="height: 300px !important;">

        {{ $assignments->appends(['search' => $search])->links() }}
    </div>

@endsection
