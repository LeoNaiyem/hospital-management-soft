@extends('layouts.app')
@section('page-title', 'Bed Details')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3 class="card-title text-white d-flex align-items-center m-0">
                        Bed Details
                    </h3>
                    <div>
                        <a href="{{ route('beds.index') }}" class="btn btn-light btn-sm" title="Back">
                            <i class="fa fa-arrow-left mr-1"></i> Back
                        </a>
                        <a href="{{ route('beds.edit', $bed->id) }}" class="btn btn-warning btn-sm" title="Edit">
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
                                <td>{{ $bed->id ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Bed number</th>
                                <td>{{ $bed->bed_number ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Ward id</th>
                                <td>{{ $bed->ward->name ?? $bed->ward_id }}</td>
                            </tr>
                            <tr>
                                <th>Bed type</th>
                                <td>{{ $bed->bed_type ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <td>{{ $bed->status ?? 'N/A' }}</td>
                            </tr>
                            <tr>
                                <th>Created At</th>
                                @php
                                    $createdAt = \Carbon\Carbon::parse($bed->created_at);
                                    $updatedAt = \Carbon\Carbon::parse($bed->updated_at);
                                @endphp
                                <td>{{ $createdAt->diffInHours(now()) < 24 ? $createdAt->diffForHumans() : $createdAt->format('M d, Y h:i A') }}
                                </td>
                            </tr>
                            <tr>
                                <th>Updated At</th>
                                <td>{{ $updatedAt->diffInHours(now()) < 24 ? $updatedAt->diffForHumans() : $updatedAt->format('M d, Y h:i A') }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <form action="{{ route('beds.destroy', $bed->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"
                            onclick="return confirm('Are you sure you want to delete this?')">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>

                    @if(isset($bed->status))
                        <span class="badge 
                                                        @if($bed->status == 'active') bg-success @endif
                                                        @if($bed->status == 'inactive') bg-danger @endif
                                                        @if($bed->status == 'pending') bg-warning @endif">
                            {{ ucfirst($bed->status) }}
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