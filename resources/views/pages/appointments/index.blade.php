@extends('layouts.app')
@section('page-title', 'Appointment Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Appointment List</h3>
                    <a href="{{ route('appointments.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Appointment
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('appointments.index') }}" method="get">
                        <div class="row">
                            <!-- Search Input with Icon -->
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text px-2 bg-info text-white">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" name="search" class="form-control" id="search"
                                        placeholder="Search by patient name" value="{{ request('search') }}">
                                </div>
                            </div>

                            <!-- Filter by Category -->
                            <div class="col-md-3 d-flex">
                                <select class="form-select" name="doctor_id" id="filterCategory">
                                    <option value="">Filter by Doctor</option>
                                    @foreach ($doctors as $doctor)
                                        <option value="{{ $doctor->id }}"
                                            {{ request('doctor_id') == $doctor->id ? 'selected' : '' }}>
                                            {{ $doctor->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Apply Filters Button -->
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-info btn-block">Apply Filters</button>
                            </div>

                            <!-- Reset Filters Button -->
                            <div class="col-md-2">
                                <a href="{{ route('appointments.index') }}" class="btn btn-outline-danger btn-block">Reset
                                    Filters</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- end filter section -->

        <!-- Table section -->
        <div class="card mb-3">
            <!-- Table -->
            <div class="table-responsive rounded-3">
                <table class="table table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>Id</th>
                            <th>Patient id</th>
                            <th>Doctor id</th>
                            <th>Appointment at</th>
                            <th>Cc</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($appointments as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ optional($item->patient)->name ?? $item->patient_id }}</td>
                                <td>{{ optional($item->doctor)->name ?? $item->doctor_id }}</td>
                                <td>{{ $item->appointment_at }}</td>
                                <td>{{ $item->cc }}</td>
                                <td>
                                    <a href="{{ route('appointments.show', $item->id) }}"
                                        class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('appointments.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('appointments.destroy', $item->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger"
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            {{ $appointments->links('pagination.custom-pagination') }}
        </div>
        <!-- End table section -->
    </div>
@endsection
