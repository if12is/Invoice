@extends('layouts/master')

@section('title', 'Invoice Details |Table')


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
                        Invoice List Page
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Product Name</th>
                                        <th>Unit No</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($invoices as $invoiceDetail)
                                        <tr>
                                            <td>{{ $invoiceDetail->lineNo }}</td>
                                            <td>{{ $invoiceDetail->productName }}</td>
                                            <td>{{ $invoiceDetail->unit->unitNo . ' - ' . $invoiceDetail->unit->unitName }}
                                            </td>
                                            <td>{{ $invoiceDetail->price }}</td>
                                            <td>
                                                <a href="{{ route('InvoiceDetails.edit', $invoiceDetail->lineNo) }}"
                                                    class="btn btn-primary">Edit</a>
                                                <form action="{{ route('InvoiceDetails.destroy', $invoiceDetail->lineNo) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
