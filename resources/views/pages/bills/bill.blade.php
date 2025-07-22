@extends('layouts.app')
@section('page-title', 'Add Bill')
@section('page-content')
    <div class="page-inner">
        <!-- Page Header -->
        <div class="card bg-info mb-3 p-4">
            <div class="row">
                <div class="col-12 d-flex justify-content-between align-item-center ">
                    <h3 class=" card-title text-white d-flex align-items-center  m-0">Add Service Invoice</h3>
                    <a href="{{ route('invoices.index') }}" class="btn btn-light btn-sm" title="Back">
                        <i class="fa fa-arrow-left mr-1"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="container card p-5 mt-3">

            {{-- Patient & Invoice Selection --}}
            @if (session('message'))
                <div class="position-fixed top-0 end-0 p-3" style="z-index: 1055">
                    <div id="toastMessage" class="toast align-items-center text-white bg-info border-0 show"
                        role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="d-flex">
                            <div class="toast-body">
                                ✅ {{ session('message') }}
                            </div>
                            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast"
                                aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            @endif


            <form action="{{ route('bill') }}" method="POST" id="serviceForm">
                @csrf
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="patient_id" class="form-label">👤 Patient</label>
                        <select class="form-select" name="patient_id" id="patient_id" required>
                            <option value="">-- Select Patient --</option>
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}"
                                    data-invoice-id="{{ $patient->latestInvoice->id ?? '' }}">
                                    {{ $patient->name }} (ID: {{ $patient->id }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="invoice_id" class="form-label">🧾 Invoice ID</label>
                        <input type="text" class="form-control" name="invoice_id" id="invoice_id"
                            value="{{ $invoice_id ?? '' }}" readonly required>
                    </div>
                </div>

                {{-- Service Selection --}}
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="service_id" class="form-label">🛎️ Service</label>
                        <select class="form-select" name="service_id" id="service_id" required>
                            <option value="">-- Select Service --</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}" data-price="{{ $service->price }}">
                                    {{ $service->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-3">
                        <label for="unit" class="form-label">🔢 Quantity</label>
                        <input type="number" class="form-control" name="unit" id="unit" value="1"
                            min="1" required>
                    </div>

                    <div class="col-md-3">
                        <label for="price" class="form-label">💲 Price per Unit</label>
                        <input type="number" class="form-control" name="price" id="price" step="0.01" readonly>
                    </div>
                </div>

                {{-- Optional Fields --}}
                <div class="row mb-3">
                    <div class="col-md-3">
                        <label for="discount" class="form-label">💸 Discount</label>
                        <input type="number" class="form-control" name="discount" id="discount" value="0"
                            step="0.01">
                    </div>

                    <div class="col-md-3">
                        <label for="vat" class="form-label">🧾 VAT (%)</label>
                        <input type="number" class="form-control" name="vat" id="vat" value="0"
                            step="0.01">
                    </div>

                    <div class="col-md-6">
                        <label for="notes" class="form-label">📝 Notes</label>
                        <textarea name="notes" id="notes" rows="1" class="form-control" placeholder="Optional note..."></textarea>
                    </div>
                </div>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" class="btn btn-primary">➕ Add Service</button>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Auto-fill price based on selected service
        document.getElementById('service_id').addEventListener('change', function() {
            console.log('click')
            const selected = this.options[this.selectedIndex];
            const price = selected.getAttribute('data-price') || 0;
            document.getElementById('price').value = price;
        });

        //getting invoice id
        document.getElementById('patient_id').addEventListener('change', function() {
            const selected = this.options[this.selectedIndex];
            const invoiceId = selected.getAttribute('data-invoice-id') || '';
            document.getElementById('invoice_id').value = invoiceId;
        });

        //alert logic
        window.addEventListener('DOMContentLoaded', () => {
            const toastEl = document.getElementById('toastMessage');
            if (toastEl) {
                const toast = new bootstrap.Toast(toastEl, {
                    delay: 4000, // 4 seconds
                    autohide: true
                });
                toast.show();
            }
        });
    </script>
@endsection
