<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Validation\ValidationException;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return response()->json($customers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'branch' => 'required|in:Taytay,Angono,Tagpos,Cainta',
                'email' => 'required|string|email|max:255|unique:customers,email',
                'password' => 'required|string|min:8',
            ]);

            $user = new Customer();
            $user->name = $request->name;
            $user->branch = $request->branch;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->save();

            // Redirect to register page with success message
            return redirect()->route('register')->with('success', 'Congratulations! Successfully registered');

        } catch (ValidationException $e) {
            return back()->withErrors($e->errors())->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}