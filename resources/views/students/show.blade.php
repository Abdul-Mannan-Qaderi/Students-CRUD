@extends('layouts.app')


@section('content')
    <div class="container d-flex justify-content-center p-0" style="flex-direction: column">

        <div>
            <a href="{{ route('students.index') }}" class="btn btn-outline-secondary">Back</a>
            <div class="card text-white bg-dark border border-info mb-3 mt-2 p-5">
                <h1 class="card-header border-info">Student Info</h1>
                <div class="card-body">
                    <p class="card-title">Name: <span class="h1 text-info" style="text-transform: uppercase">
                            {{ $student->name }}
                        </span>
                    </p>
                    <p class="card-text">Phone: <span class="text-info">{{ $student->phone }}</span> </p>
                    <p class="card-text">Email: <span class="text-info">{{ $student->email }}</span> </p>
                </div>
            </div>
        </div>

    </div>
@endsection
