<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = DB::table('transactions')->orderBy('date', 'desc')->get(); 
        return view('transactions.index', ['transactions' => $transactions]);
    }

    public function create()
    {
        return view('transactions.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'date' => 'required|date',
            'product' => 'required|string',
            'price' => 'required|numeric',
            'customer_name' => 'required|string',
            'type' => 'required|string', 
        ]);

        DB::table('transactions')->insert([
            'date' => $request->date,
            'product' => $request->product,
            'price' => $request->price,
            'customer_name' => $request->customer_name,
            'type' => $request->type, 
        ]);

        return redirect()->route('transactions.index')->with('status', 'Transaction created successfully');
    }
}
