@extends('layouts.app')
@section('page-title', 'Consultant Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Consultant List</h3>
                    <a href="{{ route('consultants.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Consultant
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('consultants.index')}}" method="get">
                        <div class="row">
                        <!-- Search Input with Icon -->
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-2 bg-info text-white">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="search" id="search"
                                    placeholder="Search by name" value="{{request('search')}}">
                            </div>
                        </div>

                        <!-- Filter by Category -->
                        <div class="col-md-3 d-flex">
                            <select class="form-select" name="department_id" id="filterCategory">
                                <option value="">Filter by Department</option>
                                @forelse ($departments as $dep)
                                    <option value="{{ $dep->id }}"
                                        {{ request('department_id') == $dep->id ? 'selected' : '' }}>
                                        {{ $dep->name }}
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
                            <a href="{{route('consultants.index')}}" class="btn btn-outline-danger btn-block">Reset Filters</a>
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
                            <th>Name</th>
                            <th>Department</th>
                            <th>Designation</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($consultants as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ optional($item->department)->name ?? $item->department_id }}</td>
                                <td>{{ $item->designation }}</td>
                                <td style="min-width:220px">
                                    <a href="{{ route('consultants.show', $item->id) }}"
                                        class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('consultants.edit', $item->id) }}"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('consultants.destroy', $item->id) }}" method="POST"
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
            {{ $consultants->appends(request()->all())->links('pagination.custom-pagination') }}
            {{-- <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> --}}
        </div>
        <!-- End table section -->
    </div>
@endsection
