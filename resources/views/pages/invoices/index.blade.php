@extends('layouts.app')
@section('page-title', 'Invoice Page')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Invoice List</h3>
                    <a href="{{ route('invoices.create') }}" class="btn btn-light btn-sm" title="Create New Product">
                        <i class="fa fa-plus mr-1"></i> Create New Invoice
                    </a>
                </div>
            </div>
        </div>
        <!-- Filter Section -->
        <div class="card mb-3 p-4">
            <div class="row">
                <div class="col-12">
                    <form action="{{route('invoices.index')}}" method="get">
                        <div class="row">
                        <!-- Search Input with Icon -->
                        <div class="col-md-5">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text px-2 bg-info text-white">
                                        <i class="fa fa-search"></i>
                                    </span>
                                </div>
                                <input name="search" type="text" class="form-control" id="search" placeholder="Search product by name" value="{{request('search')}}">
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
                            <button type="submit" class="btn btn-info btn-block">Apply Filters</button>
                        </div>

                        <!-- Reset Filters Button -->
                        <div class="col-md-2">
                            <a href="{{route('invoices.index')}}" class="btn btn-outline-danger btn-block">Reset Filters</a>
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
                            <th>Remark</th>
                            <th>Created at</th>
                            <th>Invoice total</th>
                            <th>Paid total</th>
                            <th>Payment term</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($invoices as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ optional($item->patient)->name ?? $item->patient_id }}</td>
                                <td>{{ $item->remark }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>{{ $item->invoice_total }}</td>
                                <td>{{ $item->paid_total }}</td>
                                <td>{{ $item->payment_term }}</td>
                                <td style="min-width:220px">
                                    <a href="{{ route('invoices.show', $item->id) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('invoices.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                    <form action="{{ route('invoices.destroy', $item->id) }}" method="POST"
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
            {{ $invoices->links('pagination.custom-pagination') }}
        </div>
        <!-- End table section -->
    </div>
@endsection