<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Checkoutplan;
use Illuminate\Http\Request;

class CheckoutplanController extends Controller
{
    public function index()
    {
        $user_id = Auth::id();

        $checkoutPlans = Checkoutplan::where('user_id', $user_id)
            ->with(['product']) 
            ->get();

        return view('checkoutplans.index', ['checkoutPlans' => $checkoutPlans]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
        ]);

        Checkoutplan::create([
            'user_id' => Auth::id(),
            'product_id' => $request->input('product_id'),
        ]);

        return redirect()->route('checkout.index')->with('success', 'Product added to cart.');
    }

    public function destroy($id)
    {
        $checkoutPlan = Checkoutplan::findOrFail($id);
        $checkoutPlan->delete();

        return redirect()->route('checkout.index')->with('success', 'Product removed from cart.');
    }
}
