<?php

namespace App\Services;

use App\Models\InvoiceDetail;
use App\Models\Unit;

class InvoiceService
{

    public function getAllUnits()
    {
        return Unit::all();
    }

    public function storeInvoice($data)
    {
        $message = [
            'productName.required' => 'يجب ادخال اسم المنتج',
            'productName.string' => 'يجب ادخال اسم المنتج بشكل صحيح',
            'UnitNo.required' => 'يجب ادخال رقم الوحدة',
            'UnitNo.numeric' => 'يجب ادخال رقم الوحدة بشكل صحيح',
            'price.required' => 'يجب ادخال سعر المنتج',
            'price.numeric' => 'يجب ادخال سعر المنتج بشكل صحيح',
            'quantity.required' => 'يجب ادخال الكمية',
            'quantity.numeric' => 'يجب ادخال الكمية بشكل صحيح',
            'total.required' => 'يجب ادخال الاجمالي',
            'total.numeric' => 'يجب ادخال الاجمالي بشكل صحيح',
            'expiryDate.required' => 'يجب ادخال تاريخ الانتهاء',
            'expiryDate.date' => 'يجب ادخال تاريخ الانتهاء بشكل صحيح',
        ];


        $data['total'] = $data['price'] * $data['quantity'];
        return InvoiceDetail::create($data);
    }

    public function getInvoice($id)
    {
        return InvoiceDetail::where('lineNo', $id)->first();
    }


    public function updateInvoice($data, $lineNo)
    {
        $invoice = InvoiceDetail::where('lineNo', $lineNo)->first();

        if ($invoice) {
            $invoice->update([
                'productName' => $data['productName'],
                'UnitNo' => $data['UnitNo'],
                'price' => $data['price'],
                'quantity' => $data['quantity'],
                'total' => $data['price'] * $data['quantity'],
                'expiryDate' => $data['expiryDate'],
            ]);
        }

        return $invoice;
    }


    public function getAllInvoices()
    {
        return InvoiceDetail::all();
    }

    public function deleteInvoice($id)
    {
        return InvoiceDetail::where('lineNo', $id)->delete();
    }
}
