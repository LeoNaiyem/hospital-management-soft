@extends('layouts.app')
@section('page-title', 'Bed Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Bed List</h3>
                    <a href="{{ route('beds.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Bed
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <form action="{{ route('beds.index') }}" method="get">
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
                                        placeholder="Search by bed number name" value="{{request('search')}}">
                                </div>
                            </div>

                            <!-- Filter by Category -->
                            <div class="col-md-3 d-flex">
                                <select class="form-select" name="status" id="filterCategory">
                                    <option value="">Filter by Status</option>
                                    <option value="Available" {{ request('status') == 'Available' ? 'selected' : '' }}>Available
                                    </option>
                                    <option value="Occupied" {{ request('status') == 'Occupied' ? 'selected' : '' }}>Occupied</option>
                                    <option value="Reserved" {{ request('status') == 'Reserved' ? 'selected' : '' }}>Reserved</option>
                                    <option value="Maintenance" {{ request('status') == 'Maintenance' ? 'selected' : '' }}>Maintenance
                                    </option>
                                </select>
                            </div>

                            <!-- Apply Filters Button -->
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-info btn-block">Apply Filters</button>
                            </div>

                            <!-- Reset Filters Button -->
                            <div class="col-md-2">
                                <a href="{{ route('beds.index') }}" class="btn btn-outline-danger btn-block">Reset
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
                            <th>Bed number</th>
                            <th>Ward id</th>
                            <th>Bed type</th>
                            <th>Status</th>
                            <th>Created at</th>
                            <th>Updated at</th>
                            <th class='text-center'>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($beds as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->bed_number }}</td>
                                <td>{{ optional($item->ward)->name ?? $item->ward_id }}</td>
                                <td>{{ $item->bed_type }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->updated_at }}</td>
                                <td style="min-width:220px">
                                    <a href="{{ route('beds.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('beds.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('beds.destroy', $item->id) }}" method="POST"
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
            {{ $beds->links('pagination.custom-pagination') }}
        </div>
        <!-- End table section -->
    </div>
@endsection
