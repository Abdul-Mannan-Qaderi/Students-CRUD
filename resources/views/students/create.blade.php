@extends('layouts.app')

@section('title')
    Create Student
@endsection

@section('content')
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-3">
                <h3 class="text-white">Create Student</h3>
                <div class="card bg-dark text-white mt-4">
                    <div class="card-body border border-light rounded">
                        <form action="{{ route('students.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" value="{{ old('name') }}"
                                    class="form-control bg-dark text-white @error('name') is-invalid @enderror"
                                    name="name" placeholder="Student name">
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone</label>
                                <input type="text" value="{{ old('phone') }}"
                                    class="form-control bg-dark text-white @error('phone') is-invalid @enderror"
                                    name="phone" placeholder="Student phone">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" value="{{ old('email') }}"
                                    class="form-control bg-dark text-white @error('email') is-invalid @enderror"
                                    name="email" placeholder="Student email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="d-flex gap-2">
                                    <button type="submit" class="col-md-3 btn btn-outline-info">Create</button>

                                    <a class="col-md-3 btn btn-outline-danger" href="{{ route('students.index') }}">Cancel</a>
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
