@extends('layouts.app')
@section('page-title', 'Create MoneyReceipt')
@section('page-content')

    <div class="page-inner fy-montserrat">
        <div class="mr-container rounded-2 shadow position-relative">
            <div class="p-5">
                {{-- head --}}
                <div class="mr-head d-flex justify-content-between align-items-end">

                    <div class="head-left flex-fill">
                        <h1 class=" text-seagreen">
                            <span>MONEY</span> <br>
                            RECEIPT
                        </h1>
                        <p class=" mt-2">{{now()->format('F d, Y')}}</p>
                        {{-- <p class=" mt-2">25 January, 2024</p> --}}
                    </div>
                    <div class="head-right flex-fill">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('assets/img/money_receipt/logo.png') }}" height="110" alt="logo">
                        </div>
                        <div class="mr-no d-flex align-items-center justify-content-end gap-2 mt-2">
                            <p class="text-light py-2 pe-5  text-uppercase fw-bold">Money Receipt No: {{ $newMrId }}</p>
                        </div>
                    </div>
                </div>

                {{-- transaction info --}}
                <div class="row mt-5">
                    <div class="col-7">
                        <p class=" fw-bold mb-1">PAYABLE TO:</p>
                        <select name="patient" id="patient-id" class="form-select w-50 mb-1">
                            <option value="">-----Select Patient-----</option>
                            @foreach ($patients as $patient)
                                <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                            @endforeach
                        </select>
                        <p style="line-height: 20px" class=" text-capitalized">123 Anywhere St., Any City</p>
                    </div>
                    <div class="col-5">
                        <p class=" fw-bold mb-1">BANK DETAILS:</p>
                        <p class=" text-capitalized">Arowwai Industries</p>
                        <p style="line-height: 20px" class=" text-capitalized">+123-456-7890</p>
                    </div>
                </div>

                {{-- inputs --}}
                <div class="d-flex justify-content-between align-items-center gap-2 mt-5">
                    <div>
                        <span>Service:</span>
                        <select style="min-width: 180px" name="service" id="service-id" class="form-select py-2">
                            <option value="">Select Service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service->id }}">{{$service->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="price">Price:</label><br>
                        <input type="number" id="price" class="form-control">
                    </div>
                    <div>
                        <label for="quantity">Quantity:</label><br>
                        <input type="number" id="quantity" class="form-control">
                    </div>
                    <div>
                        <label for="vat">Vat:</label><br>
                        <input type="number" id="vat" class="form-control">
                    </div>
                    <div>
                        <label for="discount">Discount:</label><br>
                        <input type="number" id="discount" class="form-control">
                    </div>
                    <button id="add-btn" class="btn btn-info mt-4 p-2">ADD</button>
                </div>

                {{-- table --}}
                <table class="table table-striped mt-4 ">
                    <thead class="table-info">
                        <tr>
                            <th class=" text-center">NO</th>
                            <th>DESCRIPTION</th>
                            <th class=" text-center">QUANTITY</th>
                            <th class=" text-center">PRICE</th>
                            <th class=" text-center">VAT</th>
                            <th class=" text-center">DISCOUNT</th>
                            <th class=" text-center">
                                <button onclick="clearServices()" class="btn-clear">CLR</button>
                            </th>
                            <th class=" text-center">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody id="tbody"></tbody>
                </table>

                {{-- calculations --}}
                <div class="d-flex justify-content-end align-items-center pe-4 gap-5">
                    <div class="d-flex flex-column">
                        <p class="text-end fw-semibold ">SUBTOTAL:</p>
                        <p class="text-end fw-semibold ">TAX:</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>$<span id="subtotal-amount">000</span></p>
                        <p>5%</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between px-4 py-2 text-light mt-3 align-items-center bg-seagreen">
                    <p class="fw-bold">GRAND TOTAL:</p>
                    <p class="fw-bold">$<span id="total-amount">000</span></p>
                </div>

                {{-- trams and conditions --}}
                <div class="row mt-5 px-4">
                    <div class="col-6">
                        <p class="fw-bold text-seagreen mb-1">
                            ANY SPECIAL NOTES?
                        </p>
                        <textarea class="form-control" name="remark" id="remark" cols="40" rows="2"
                            placeholder="Special notes..."></textarea>
                    </div>

                    {{-- signature --}}
                    <div class="col-6 d-flex flex-column align-items-end mt-1">
                        <div class="d-flex align-items-center flex-column">
                            <p class="fw-bold text-center">
                                THANK YOU FOR YOUR <br>
                                ATTENTION
                            </p>
                            <div class="signature-box d-flex justify-content-center align-items-center mt-3">
                                <button id="create-btn" class="btn btn-info my-4">Create</button>
                            </div>
                            <p class="text-center fw-bold mt-1 mb-3"></p>
                            <button class="btn btn-primary">
                                OUR CONTACT INFORMATION
                            </button>
                            <p class="my-2">
                                <small>
                                    naiyemhossain@gmail.com

                                    <i class="fa fa-envelope px-3 text-seagreen"></i>
                                </small>
                                <small>
                                    +8801478569853
                                    <i class="fa fa-phone ps-3 text-seagreen"></i>
                                </small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- footer image --}}
            <div class="position-absolute bottom-0 left-0 pe-none">
                <img height="250" src="{{ asset('assets/img/money_receipt/footer-corner.png') }}" alt="footer graphics">
            </div>
        </div>
    </div>
    <script>
        let items = [];

        //handle add 
        document.getElementById('add-btn').addEventListener('click', () => {
            const serviceEl = document.getElementById('service-id');
            const service_id = serviceEl.value;
            const service_name = serviceEl.options[serviceEl.selectedIndex].text;
            const price = document.getElementById('price').value;
            const quantity = document.getElementById('quantity').value;
            const vat = document.getElementById('vat').value;
            const discount = document.getElementById('discount').value;
            const item = {
                service_id,
                service_name,
                price: parseFloat(price),
                quantity: parseFloat(quantity),
                vat: parseFloat(vat),
                discount: parseFloat(discount),
            }
            items.push(item);
            clearInputs();
            showServices();
        });

        //handel clear input fields
        function clearInputs() {
            document.getElementById('service-id').selectedIndex = 0;
            document.getElementById('price').value = '';
            document.getElementById('quantity').value = '';
            document.getElementById('vat').value = '';
            document.getElementById('discount').value = '';
        }

        //handel show services
        function showServices() {
            const TAX = 0.05;
            let tbody = document.getElementById('tbody');
            let subtotalEl = document.getElementById('subtotal-amount');
            let totalEl = document.getElementById('total-amount');
            tbody.innerHTML = '';
            let lineTotal = 0;
            let subtotal = 0;
            items.forEach((item, index) => {
                lineTotal = item.price * item.quantity + item.vat - item.discount;
                subtotal += lineTotal;
                const tr = document.createElement('tr');
                tr.innerHTML = `
                                <tr>
                                    <th class="text-center">${index + 1}</th>
                                    <td>${item.service_name}</td>
                                    <td class="text-center">${item.quantity}</td>
                                    <td class="text-center">$${item.price}</td>
                                    <td class="text-center">$${item.vat}</td>
                                    <td class="text-center">$${item.discount}</td>
                                    <td class="text-center">
                                        <button onclick="removeService(${index})" class="btn-clear btn-remove">DEL</button>
                                    </td>
                                    <td class="text-center">$${lineTotal}</td>
                                </tr>
                            `;
                tbody.appendChild(tr);
            });

            const total = subtotal + (subtotal * TAX);
            subtotalEl.textContent = subtotal.toFixed(2);
            totalEl.textContent = total.toFixed(2);

        }

        //handle clear services
        function clearServices() {
            items = [];
            showServices();
        }

        //handle remove service
        function removeService(index) {
            items.splice(index, 1);
            showServices();
        }

        //handle crate money receipt
        document.getElementById('create-btn').addEventListener('click', () => {
            const patient_id = document.getElementById('patient-id').value;
            const remark = document.getElementById('remark').value;
            const receipt_total = document.getElementById('total-amount').textContent;
            const subtotal = document.getElementById('subtotal-amount').textContent;
            const vat = parseFloat(subtotal) * 0.05;
            const payload = {
                patient_id,
                remark,
                receipt_total,
                vat: vat.toFixed(2),
                discount: 0,
                items,
            }
            console.log(payload);
        });
    </script>
@endsection

@push('mr-css')
    <link rel="stylesheet" href="{{ asset('assets/css/moneyreceipt.css') }}">
@endpush