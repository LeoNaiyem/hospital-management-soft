@extends('layouts.app')
@section('page-title', 'Admission Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Admission List</h3>
                    <a href="{{ route('admissions.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Admission
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('admissions.index') }}" method="get">
                        <div class="row">
                            <!-- Search Input with Icon -->
                            <div class="col-md-5">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text px-2 bg-info text-white">
                                            <i class="fa fa-search"></i>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" name="search" value="{{ request('search') }}" id="search"
                                        placeholder="Search product by name">
                                </div>
                            </div>

                            <!-- Filter by Category -->
                            <div class="col-md-3 d-flex">
                                <select class="form-select" name="department_id" id="filterCategory">
                                    <option value="">Filter by Category</option>
                                    @forelse ($departments as $dep)
                                        <option value="{{ $dep->id }}"
                                            {{ request('department_id')==$dep->id?'selected':'' }}    
                                        >
                                            {{ $dep->name }}
                                        </option>
                                    @empty
                                        <option value="">No Department found</option>
                                    @endforelse
                                </select>
                            </div>

                            <!-- Apply Filters Button -->
                            <div class="col-md-2">
                                <button type='submit' class="btn btn-info btn-block">Apply Filters</button>
                            </div>

                            <!-- Reset Filters Button -->
                            <div class="col-md-2">
                                <a href="{{ route('admissions.index') }}" class="btn btn-outline-danger btn-block">Reset
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
                            <th>Ref Dr.</th>
                            <th>Under Dr.</th>
                            <th>Bed</th>
                            <th>Ad.Date</th>
                            <th>Department</th>
                            <th>Advance</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($admissions as $item)
                            {{-- {{ dd($item) }} --}}
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ optional($item->patient)->name ?? $item->patient_id }}</td>
                                <td>{{ optional($item->ref_doctor)->name ?? $item->ref_doctor_id }}</td>
                                <td>{{ optional($item->under_doctor)->name ?? $item->under_doctor_id }}</td>
                                <td>{{ optional($item->bed)->bed_number ?? $item->bed_id }}</td>
                                <td>{{ \Carbon\Carbon::parse($item->admission_date)->format('F d, Y') }}</td>
                                <td>{{ optional($item->department)->name ?? $item->department_id }}</td>
                                <td>{{ $item->advance }}</td>
                                <td style="min-width:220px">
                                    <a href="{{ route('admissions.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('admissions.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('admissions.destroy', $item->id) }}" method="POST"
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
            {{ $admissions->appends(request()->all())->links('pagination.custom-pagination') }}
        </div>
        <!-- End table section -->
    </div>
@endsection