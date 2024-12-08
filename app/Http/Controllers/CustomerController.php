<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function print(Request $request)
    {
        $data = $request->all();
        
        return view('print.customer', compact('data'));
    }
    public function login(Request $request)
    {
        $username = $request['username'];
        $password = $request['password'];
        if ($username == 'ans' && $password == 'admin123') {
            session()->put('userLogin', true);
            return redirect()->route('customer.create');
        } else {
            return redirect()->back();
        }
    }
    public function logout(Request $request)
    {
        session()->forget('userLogin');
        return redirect('https://ansfabricstailoringltd.com/');

    }
    public function getData($id)
    {
        // Fetch the measurement details by customer ID
        $measurement = Customer::where('id', $id)->first();

        return response()->json($measurement);
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
        return view('add-customer');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);sz

        if ($request->hasFile('note')) {
            foreach ($request->file('note') as $image) {
                $filePath = $image->store('notes', 'public');
                $imagePaths[] = $filePath;
            }
            $data['note'] = json_encode($imagePaths);
        }


        // if ($request->hasFile('note')) {
        //     $file = $request->file('note');
        //     $filePath = $file->store('notes', 'public');
        //     $data['note'] = $filePath;
        // }

        $customer = Customer::create($data);

        return redirect()->route('order.create', $customer->id)->with('success', 'Customer saved successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
