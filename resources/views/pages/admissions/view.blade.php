@extends('layouts.app')
@section('page-title', 'Admission Details')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-items-center">
                    <h3 class="card-title text-white d-flex align-items-center m-0">
                         Admission Details
                    </h3>
                    <div>
                        <a href="{{ route('admissions.index') }}" class="btn btn-light btn-sm" title="Back">
                            <i class="fa fa-arrow-left mr-1"></i> Back
                        </a>
                        <a href="{{ route('admissions.edit', $admission->id) }}" class="btn btn-warning btn-sm" title="Edit">
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
                    <td>{{ $admission->id ?? 'N/A' }}</td>
                </tr>                <tr>
                    <th>Patient id</th>
                    <td>{{ $admission->patient->name ?? $admission->patient_id }}</td>
                </tr>                <tr>
                    <th>Ref doctor id</th>
                    <td>{{ $admission->refDoctor->name ?? $admission->ref_doctor_id }}</td>
                </tr>                <tr>
                    <th>Under doctor id</th>
                    <td>{{ $admission->underDoctor->name ?? $admission->under_doctor_id }}</td>
                </tr>                <tr>
                    <th>Bed id</th>
                    <td>{{ $admission->bed->name ?? $admission->bed_id }}</td>
                </tr>                <tr>
                    <th>Admission date</th>
                    <td>{{ $admission->admission_date ?? 'N/A' }}</td>
                </tr>                <tr>
                    <th>Created at</th>
                    <td>{{ $admission->created_at ?? 'N/A' }}</td>
                </tr>                <tr>
                    <th>Department id</th>
                    <td>{{ $admission->department->name ?? $admission->department_id }}</td>
                </tr>                <tr>
                    <th>Advance</th>
                    <td>{{ $admission->advance ?? 'N/A' }}</td>
                </tr>                <tr>
                    <th>Problem</th>
                    <td>{{ $admission->problem ?? 'N/A' }}</td>
                </tr>                <tr>
                    <th>Remark</th>
                    <td>{{ $admission->remark ?? 'N/A' }}</td>
                </tr>                <tr>
                    <th>Created At</th>
                    <td>{{ \${$modelVar}->created_at->format('M d, Y h:i A') }}</td>
                </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mt-4 d-flex justify-content-between">
                    <form action="{{ route('admissions.destroy', $admission->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">
                            <i class="fas fa-trash mr-1"></i> Delete
                        </button>
                    </form>
                    
                    @if(isset($admission->status))
                        <span class="badge 
                            @if($admission->status == 'active') bg-success @endif
                            @if($admission->status == 'inactive') bg-danger @endif
                            @if($admission->status == 'pending') bg-warning @endif">
                            {{ ucfirst($admission->status) }}
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