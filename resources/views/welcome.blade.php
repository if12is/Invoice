@extends('layouts/master')

@section('title', 'Home Page')


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
                <h1 class="display-4 font-weight-bold text-center">Invoice App | Home Page</h1>
            </div>

            <div class="col-12 mt-4">
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('InvoiceDetails.index') }}" class="btn btn-primary btn-lg">Invoice Details</a>
                </div>

                <div class="d-flex justify-content-center align-items-center mt-4">
                    <a href="{{ route('InvoiceDetailsTable.index') }}" class="btn btn-primary btn-lg">Invoice List</a>
                </div>
            </div>
        </div>
    @endsection

    @section('scripts')
    @endsection
