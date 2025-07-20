@extends('layouts.app')
@section('page-title', 'Prescription Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Prescription List</h3>
                    <a href="{{ route('prescriptions.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Prescription
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('prescriptions.index') }}" method="get">
                        <div class="row">
                            <!-- Search Input with Icon -->
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text px-2 bg-info text-white">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="search" value="{{request('search')}}" id="search"
                                        placeholder="Search by patient name">
                                </div>
                            </div>

                            <!-- Filter by Category -->
                            <div class="col-md-3 d-flex">
                                <select class="form-select" name="consultant_id" id="filterCategory">
                                    <option value="">Filter by Consultant</option>
                                    @forelse ($consultants as $con)
                                        <option value="{{ $con->id }}"
                                            {{ request('consultant_id') == $con->id ? 'selected' : '' }}>
                                            {{ $con->name }}
                                        </option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>

                            <!-- Apply Filters Button -->
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-info btn-block">Apply Filters</button>
                            </div>

                            <!-- Reset Filters Button -->
                            <div class="col-md-2">
                                <a href="{{ route('prescriptions.index') }}" class="btn btn-outline-danger btn-block">Reset
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
                            <th>Patient</th>
                            <th>Consultant</th>
                            <th>Cc</th>
                            <th>Rf</th>
                            <th>Investigation</th>
                            <th>Advice</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prescriptions as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ optional($item->patient)->name ?? $item->patient_id }}</td>
                                <td>{{ optional($item->consultant)->name ?? $item->consultant_id }}</td>
                                <td>{{ $item->cc }}</td>
                                <td>{{ $item->rf }}</td>
                                <td>{{ $item->investigation }}</td>
                                <td>{{ $item->advice }}</td>
                                <td style="min-width:220px">
                                    <a href="{{ route('prescriptions.show', $item->id) }}"
                                        class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('prescriptions.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('prescriptions.destroy', $item->id) }}" method="POST"
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
            {{ $prescriptions->links('pagination.custom-pagination') }}
        </div>
        <!-- End table section -->
    </div>
@endsection
