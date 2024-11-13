@extends('layouts/master')

@section('title', 'Invoice Details')


@section('styles')
    <style>
        .font-figtree {
            font-family: 'figtree', sans-serif;
        }
    </style>
@endsection


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card my-5">
                    <div class="card-header text-center">
                        Invoice Details Page
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ route('InvoiceDetails.store') }}" method="POST" class="w-100"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')

                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="product_name">Product Name</label>
                                        <input type="text" name="productName" id="productName"
                                            class="form-control @error('productName') is-invalid @enderror" />
                                        @error('productName')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="UnitNo">Unit No</label>
                                        <select name="UnitNo" id="unitNo"
                                            class="form-control @error('unitNo') is-invalid @enderror">
                                            @foreach ($units as $unit)
                                                <option value="{{ $unit->unitNo }}">{{ $unit->unitName }}</option>
                                            @endforeach
                                        </select>

                                        @error('unitNo')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input type="number" name="price" id="price"
                                            class="form-control @error('price') is-invalid @enderror" />
                                        @error('price')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="quantity">Tuantity</label>
                                        <input type="number" name="quantity" id="quantity"
                                            class="form-control @error('productName') is-invalid @enderror" />
                                    </div>
                                    <div class="form-group">
                                        <label for="total">Total</label>
                                        <input type="number" name="total" id="total" class="form-control" />
                                    </div>
                                    <div class="form-group">
                                        <label for="expiryDate">Expiry Date</label>
                                        <input type="date" name="expiryDate" id="expiryDate" class="form-control" />
                                    </div>

                                    <div class="form-group btn-group my-3">
                                        <button class="btn btn-primary mx-1">Save</button>

                                    </div>
                                </div>
                            </form>

                            <a class="btn btn-danger mx-1" id="cancel_btn">Cancel</a>
                            <a class="btn btn-danger mx-1" id="back_btn">Back Home Page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        document.getElementById('back_btn').addEventListener('click', function() {
            window.location.href = '{{ route('home') }}';
        });
        document.getElementById('cancel_btn').addEventListener('click', function() {
            document.getElementById('productName').value = '';
            document.getElementById('price').value = '';
            document.getElementById('quantity').value = '';
            document.getElementById('total').value = '';
            document.getElementById('expiryDate').value = '';
        });
    </script>


@endsection
