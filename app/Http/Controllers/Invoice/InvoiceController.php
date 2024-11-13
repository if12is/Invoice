<?php

namespace App\Http\Controllers\Invoice;

use App\Http\Controllers\Controller;
use App\Services\InvoiceService;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    protected $invoiceService;

    public function __construct(InvoiceService $invoiceService)
    {
        $this->invoiceService = $invoiceService;
    }
    /**
     * Display a listing of the resource.
     */
    public function InvoiceDetailsIndex()
    {
        $units = $this->invoiceService->getAllUnits();
        return view('invoices.InvoiceDetails', compact('units'));
    }

    public function InvoiceDetailsTableIndex()
    {
        $invoices = $this->invoiceService->getAllInvoices();
        return view('invoices.InvoiceDetailsTableIndex', compact('invoices'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->invoiceService->storeInvoice($request->all());
        return redirect()->route('InvoiceDetails.index');
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $invoice =  $this->invoiceService->getInvoice($id);
        $units = $this->invoiceService->getAllUnits();
        return view('invoices.edit', compact('invoice', 'units'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->invoiceService->updateInvoice($request->all(), $id);

        return redirect()->route('InvoiceDetails.edit', $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->invoiceService->deleteInvoice($id);

        return redirect()->route('InvoiceDetails.index');
    }
}
