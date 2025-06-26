@extends('layouts.app')

@section('title')
    Students
@endsection


@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1 class="text-white">List of Students</h1>
        </div>

        <div class="col-md-6">
            @if (session('success'))
                <div class="alert alert-success text-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="col-md-2 d-flex justify-content-end align-items-center">
            <a class="btn btn-outline-info justify-end" href="{{ route('students.create') }}">Add Student</a>
        </div>
    </div>

    <table class="border border-secondary table table-dark table-striped mt-4">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Operations</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->phone }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a class="btn btn-outline-success px-1 py-0" href="{{ route('students.show', $student) }}">View</a>

                        <a class="btn btn-outline-primary px-1 py-0" href="{{ route('students.edit', $student) }}">Edit</a>

                        {{-- <a class="btn btn-outline-danger" href="{{ route('students.destroy', $student) }}">Delete</a> --}}


                        <button type="button" class="btn btn-outline-danger px-1 py-0" data-bs-toggle="modal"
                            data-bs-target="#confirmDeleteModal-{{ $student->id }}">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="confirmDeleteModal-{{ $student->id }}" tabindex="-1"
                            aria-labelledby="confirmDeleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content bg-dark text-white">
                                    <div class="modal-header bg-danger text-white">
                                        <h5 class="modal-title" id="confirmDeleteLabel">Confirm Deletion</h5>
                                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete <strong>{{ $student->name }}</strong>?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Cancel</button>
                                        <form action="{{ route('students.destroy', $student) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>
            @endforeach

            @if ($students->isEmpty())
                <tr>
                    <td colspan="4" class="text-center">No students found</td>
                </tr>
            @endif


            @if (session('error'))
                <tr>
                    <td colspan="4" class="text-danger text-center">
                        {{ session('error') }}
                    </td>
                </tr>
            @endif
        </tbody>
    </table>
    <div class="mt-4">
        {{ $students->links() }}
    </div>
@endsection
