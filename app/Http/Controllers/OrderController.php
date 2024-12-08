<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;
use Storage;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function print(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('id', $data['customer'])->first();
        $count = Customer::where('id', $data['customer'])->count();
        $html = view('print.order', compact('data', 'customer', 'count'))->render();
        return view('print.print_page', ['pdf' => $html]);
    }
    public function printLabel(Request $request)
    {
        $data = $request->all();
        $customer = Customer::where('id', $data['customer'])->first();
        $count = Customer::where('id', $data['customer'])->count();
        $html = view('print.label', compact('data', 'customer', 'count'))->render();
        return view('print.print_page', ['pdf' => $html]);
    }
    public function printImg(Request $request)
    {

        $imageData = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                // Convert image to base64
                $imageData[] = base64_encode(file_get_contents($image));
            }
        }

        // Store the images in the session
        session(['uploaded_images' => $imageData]);

        return response()->json(['success' => true]);

    }

    public function email(Request $request)
    {
        $emailOrder = $request->all();
        $email = $emailOrder['email'];
        $customer = Customer::where('id', $request->input('customer'))->first();
        // dd($order['email']);
        Mail::send('email.order', compact('emailOrder', 'customer'), function ($message) use ($email) {
            $message->to($email)
                ->subject('Order Details');
        });

        return response()->json(['message' => 'Order email sent successfully!']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $status = $request->input('status');
        if (!$status) {
            $status = 0;
            $orders = Order::where('status', 'active')->get();

        } elseif ($status == 0) {
            $status = 0;
            $orders = Order::where('status', 'active')->get();
        } elseif ($status == 1) {
            $orders = Order::where('status', 'pending')->get();
        } elseif ($status == 2) {
            $orders = Order::where('status', 'complete')->get();
        }

        return view('orders', compact('orders', 'status'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, $id = 0)
    {
        if ($id == 0) {
            $customers = Customer::all();
            return view('add-order', compact('customers'));
        } else {
            $customers = Customer::all();
            return view('add-order', compact('customers', 'id'));
        }

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('note')) {
            foreach ($request->file('note') as $image) {
                $filePath = $image->store('notes', 'public');
                $imagePaths[] = $filePath;
            }
            $data['note'] = json_encode($imagePaths);
        }

        // if ($request->hasFile('note')) {
        //     $file = $request->file('note');
        //     // dd($file);
        //     $filePath = $file->store('notes', 'public');
        // }

        Order::create($data);

        return redirect()->route('order.index')->with('success', 'Order saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        $customers = Customer::all();
        $order = Order::find($order->id);
        return view('edit-order', compact('order', 'customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        // Extract other data except images
        $data = $request->except('notes');
    
        // Check if multiple files are uploaded
        if ($request->hasFile('notes')) {
            // Delete existing images associated with the order, if any
            if ($order->notes) {
                foreach (json_decode($order->notes, true) as $note) {
                    Storage::disk('public')->delete($note);
                }
            }
    
            // Store new images and collect their paths
            $filePaths = [];
            foreach ($request->file('notes') as $file) {
                $filePath = $file->store('notes', 'public');
                $filePaths[] = $filePath;
            }
    
            // Save file paths as JSON
            $data['note'] = json_encode($filePaths);
        }
    
        // Update the order with the new data
        $order->update($data);
    
        return redirect()->route('order.index')->with('success', 'Order updated successfully!');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $order = Order::find($id);
        if ($order->note) {
            Storage::disk('public')->delete($order->note);
        }

        $order->delete();
        return back()->with('success', 'Order deleted successfully!');
    }

}
