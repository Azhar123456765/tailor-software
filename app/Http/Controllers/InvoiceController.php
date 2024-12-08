<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Invoice;
use DB;
use Illuminate\Http\Request;
use Mail;

class InvoiceController extends Controller
{

    
    public function print(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('id', $data['customer'])->first();
        $html = view('print.invoice',compact('data', 'customer'))->render();

        return view('print.print_page', ['pdf' => $html]);
    }

    public function email(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('id', $data['customer'])->first();

        $email = $data['email'];
        // dd($order['email']);
        Mail::send('email.invoice', compact('data','customer'), function ($message) use ($email) {
            $message->to($email)
                ->subject('Invoice Details');
        });

        return response()->json(['message' => 'Invoice email sent successfully!']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers = Customer::all();
        $sell_invoice = Invoice::all();
        $count = Invoice::whereIn('invoices.id', function ($query2) {
            $query2->select(DB::raw('MIN(id)'))
                ->from('invoices')
                ->groupBy('unique_id');
        })->count();
        // dd($count);
        return view('add-invoice', compact('customers', 'count'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $invoiceData = $request->all();

        $arrayLength = count(array_filter($invoiceData['item']));
        // dd($invoiceData);
        for ($i = 0; $i < $arrayLength; $i++) {

            $invoice = new Invoice();

            $invoice->unique_id = $invoiceData['unique_id'] ?? 0;
            $invoice->date = $invoiceData['date'] ?? 0;

            $invoice->customer_id = $invoiceData['customer'] ?? 0;
            $invoice->remarks = $invoiceData['remarks'] ?? 0;


            $invoice->item = $invoiceData['item']["$i"] ?? 0;
            $invoice->sale_qty = $invoiceData['sale_qty']["$i"] ?? 0;
            $invoice->sale_price = $invoiceData['sale_price']["$i"] ?? 0;
            $invoice->amount = $invoiceData['amount']["$i"] ?? 0;

            $invoice->total = $invoiceData['total'] ?? 0;
            $invoice->discount = $invoiceData['discount'] ?? 0;
            $invoice->net_amount = $invoiceData['net_amount'] ?? 0;
            $invoice->amount_paid = $invoiceData['amount_paid'] ?? 0;
            $invoice->remaining_amount = $invoiceData['remaining_amount'] ?? 0;

            $invoice->save();
        }


        return redirect()->back()->with('success', 'Invoice saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Invoice $invoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Invoice $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Invoice $invoice)
    {
        //
    }
}
