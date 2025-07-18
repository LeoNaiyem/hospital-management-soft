@extends('layouts.app')
@section('page-title', 'Doctor Details')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3 class="card-title text-white d-flex align-items-center m-0">
                        Doctor Details
                    </h3>
                    <div>
                        <a href="{{ route('doctors.index') }}" class="btn btn-light btn-sm" title="Back">
                            <i class="fa fa-arrow-left mr-1"></i> Back
                        </a>
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning btn-sm" title="Edit">
                            <i class="fa fa-edit mr-1"></i> Edit
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <tbody>
                            <tr>
                                <th>Id</th>
                                <td>{{ $doctor->id ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <td>{{ $doctor->name ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $doctor->phone ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Designation id</th>
                                <td>{{ $doctor->designation->name ?? $doctor->designation_id }}</td>
                            </tr>
                            <tr>
                                <th>Department id</th>
                                <td>{{ $doctor->department->name ?? $doctor->department_id }}</td>
                            </tr>
                            <tr>
                                <th width="30%">Photo</th>
                                <td>
                                    @if($doctor->photo)
                                        <img src="{{ asset('storage/' . $doctor->photo) }}" class="img-thumbnail" width="150">
                                    @else
                                        <span class="text-muted">No Photo</span>
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                <td>{{\Carbon\Carbon::parse($doctor->created_at)->format('M d, Y h:i A') }}</td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{\Carbon\Carbon::parse($doctor->updated_at)->format('M d, Y h:i A') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this?')">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>

                    @if(isset($doctor->status))
                        <span class="badge 
                                    @if($doctor->status == 'active') bg-success @endif
                                    @if($doctor->status == 'inactive') bg-danger @endif
                                    @if($doctor->status == 'pending') bg-warning @endif">
                            {{ ucfirst($doctor->status) }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .table th {
            width: 30%;
            background-color: #f8f9fa;
        }

        .img-thumbnail {
            max-height: 200px;
            object-fit: contain;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
        }

        .badge {
            font-size: 0.85rem;
            padding: 0.5rem 0.75rem;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-danger {
            background-color: #dc3545 !important;
        }

        .bg-warning {
            background-color: #ffc107 !important;
            color: #212529;
        }
    </style>
@endpush