@extends('layouts.app')
@section('page-title', 'Service Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Service List</h3>
                    <a href="{{ route('services.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Service
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <!-- Search Input with Icon -->
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-2 bg-info text-white">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="search" placeholder="Search product by name">
                            </div>
                        </div>

                        <!-- Filter by Category -->
                        <div class="col-md-3 d-flex">
                            <select class="form-select" id="filterCategory">
                                <option value="">Filter by Category</option>
                                <option value="">option-1</option>
                                <option value="">option-2</option>
                                <option value="">option-3</option>
                                <option value="">option-4</option>
                            </select>
                        </div>

                        <!-- Apply Filters Button -->
                        <div class="col-md-2">
                            <button class="btn btn-info btn-block">Apply Filters</button>
                        </div>

                        <!-- Reset Filters Button -->
                        <div class="col-md-2">
                            <button class="btn btn-outline-danger btn-block">Reset Filters</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end filter section -->

        <!-- Table section -->
        <div class="card mb-3">
            <!-- Table -->
            <div class="table-responsive rounded-3">
                <table class="table table-hover">
                    <thead class="table-primary"><tr><th>Id</th><th>Name</th><th>Price</th><th>Discount</th><th>Vat</th><th>Medicine category id</th><th>Actions</th></tr></thead>
                    <tbody>
                    @foreach ($services as $item)
                        <tr><td>{{ $item->id }}</td><td>{{ $item->name }}</td><td>{{ $item->price }}</td><td>{{ $item->discount }}</td><td>{{ $item->vat }}</td><td>{{ optional($item->medicineCategory)->name ?? $item->medicine_category_id }}</td><td style="min-width:220px">
        <a href="{{ route('services.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
        <a href="{{ route('services.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
        <form action="{{ route('services.destroy', $item->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form>
    </td></tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            {{ $services->appends(request()->all())->links('pagination.custom-pagination') }}
        </div>
        <!-- End table section -->
    </div>
@endsection