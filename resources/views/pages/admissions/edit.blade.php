@extends('layouts.app')
@section('page-title', 'Edit Admission')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Edit Admission</h3>
                    <a href="{{ route('admissions.index') }}" class="btn btn-light btn-sm" title="Back">
                        <i class="fa fa-arrow-left mr-1"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card p-4"> 
            <form action="{{ route('admissions.update', $admission->id) }}" method="POST" enctype="multipart/form-data">
                @include('pages.admissions._form', ['mode' => 'edit', 'admission' => $admission])
            </form>
        </div>
    </div>
@endsection