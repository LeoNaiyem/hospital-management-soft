@extends('layouts.app')
@section('page-title', 'Create MoneyReceipt')
@section('page-content')

    <div class="page-inner fy-montserrat">
        <pre>
                {{-- @dd($details) --}}
            </pre>
        <div class="mr-container rounded-2 shadow position-relative">
            <div class="p-5">
                {{-- head --}}
                <div class="mr-head d-flex justify-content-between align-items-end">

                    <div class="head-left flex-fill">
                        <h1 class=" text-seagreen">
                            <span>MONEY</span> <br>
                            RECEIPT
                        </h1>
                        <p class=" mt-2">{{ $moneyReceipt->created_at->format('F d, Y') }}</p>
                    </div>
                    <div class="head-right flex-fill">
                        <div class="d-flex justify-content-end">
                            <img src="{{ asset('assets/img/money_receipt/logo.png') }}" height="110" alt="logo">
                        </div>
                        <div class="mr-no d-flex align-items-center justify-content-end gap-2 mt-2">
                            <p class="text-light py-2 pe-5  text-uppercase fw-bold">Money Receipt No: {{ $customMrId }}</p>
                        </div>
                    </div>
                </div>

                {{-- transaction info --}}
                <div class="row mt-5">
                    <div class="col-7">
                        <p class=" fw-bold mb-1">PAYABLE TO:</p>
                        <p class="text-capitalized ">{{ $patient->name }}</p>
                        <p style="line-height: 20px" class=" text-capitalized">370/Cha, Saudi colony,Dhaka Cant.
                    </div>
                    <div class="col-5">
                        <p class=" fw-bold mb-1">BANK DETAILS:</p>
                        <p class=" text-capitalized">Islami Bank Bangladesh Ltd.</p>
                        <p style="line-height: 20px" class=" text-capitalized">+880-1525-327890</p>
                    </div>
                </div>

                {{-- table --}}
                <table class="table table-striped mt-5 ">
                    <thead class="table-info">
                        <tr>
                            <th class=" text-center">NO</th>
                            <th>DESCRIPTION</th>
                            <th class=" text-center">QUANTITY</th>
                            <th class=" text-center">PRICE</th>
                            <th class=" text-center">VAT</th>
                            <th class=" text-center">DISCOUNT</th>
                            <th class=" text-center">TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($details as $index => $detail)
                            <tr>
                                <th class=" text-center">{{ $index + 1 }}</th>
                                <td class="">{{ $detail->serviceName }}</td>
                                <td class=" text-center">{{$detail->qty}}</td>
                                <td class=" text-center">${{ number_format($detail->price, 2)}}</td>
                                <td class=" text-center">${{ number_format($detail->discount, 2) }}</td>
                                <td class=" text-center">${{ number_format($detail->vat, 2) }}</td>
                                <td class=" text-center">${{ number_format($detail->lineTotal, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                {{-- calculations --}}
                <div class="d-flex justify-content-end align-items-center pe-5 gap-5">
                    <div class="d-flex flex-column">
                        <p class="text-end fw-semibold ">SUBTOTAL:</p>
                        <p class="text-end fw-semibold ">TAX (5%):</p>
                    </div>
                    <div class="d-flex flex-column">
                        <p>${{ number_format($subtotal, 2) }}</p>
                        <p>${{number_format($tax, 2)}}</p>
                    </div>
                </div>
                <div class="d-flex justify-content-between px-5 py-2 text-light mt-3 align-items-center bg-seagreen">
                    <p class="fw-bold">GRAND TOTAL:</p>
                    <p class="fw-bold">${{ number_format($moneyReceipt->receipt_total,2) }}</p>
                </div>

                {{-- trams and conditions --}}
                <div class="row mt-5 px-4">
                    <div class="col-6">
                        <p class="fw-bold text-seagreen mb-1">
                            TRAMS & CONDITIONS
                        </p>
                        <p style="font-size: 12px">
                            Refunds are available for services or products that do not meet the agreed upon specifications
                            or were delivered in an
                            unsatisfactory condition & refund requests must be made within 30 days from the date of
                            service/product delivery.
                        </p>
                    </div>

                    {{-- signature --}}
                    <div class="col-6 d-flex flex-column align-items-end mt-1">
                        <div class="d-flex align-items-center flex-column">
                            <p class="fw-bold text-center">
                                THANK YOU FOR YOUR <br>
                                ATTENTION
                            </p>
                            <div class="signature-box mt-3">
                                <img src="{{ asset('assets/img/money_receipt/signature.png') }}" alt="signature">
                            </div>
                            <p class="text-center fw-bold mt-1 mb-3">NAIYEM HOSSAIN</p>
                            <button class="btn btn-info">
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
        <div onclick="window.print()" class="d-flex justify-content-center mt-3">
            <button class="btn btn-info">
                PRINT
            </button>
        </div>
    </div>
@endsection

@push('mr-css')
    <link rel="stylesheet" href="{{ asset('assets/css/moneyreceipt.css') }}">
@endpush