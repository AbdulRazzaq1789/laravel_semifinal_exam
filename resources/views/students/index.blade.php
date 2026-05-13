@extends('layouts.app')

@section('title', 'Studens List')

@section('actions')

    <a class="btn btn-add" href="{{ route('students.create') }}">+ Add Student</a>

@endsection

@section('content')
    <div class="panel">
        <form action="{{ route('students.index') }}" method="GET" class="search-query-form">
            <input type="text" name="search" placeholder="Search students..." value="{{ $search }}">

            <button class="btn btn-info" type="submit">Search</button>

            @if ($search)
                <a class="btn btn-edit" href="{{ route('students.index') }}">Clear</a>
            @endif
        </form>

    </div>

    <div class="panel">
        <div class="panel-header">Students List</div>

        <div class="panel-body no-pad">
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Student Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td></td>
                            <td>{{ $student->name }} </td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->phone }} </td>
                            <td>
                                <a class="btn btn-info" href="{{ route('students.show', $student) }}">View</a>
                                <a class="btn btn-edit" href="{{ route('students.edit', $student) }}">Edit</a>

                                <form action="{{ route('students.destroy', ['student' => $student]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete"
                                        onclick="return confirm('Are you sure?')">Delete</button>

                                </form>

                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5">No Students Avaliable.</td>
                        </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
    <div class="pagination-wrapper" style="height: 300px !important;">

        {{ $students->appends(['search' => $search])->links() }}
    </div>

@endsection
