<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>Checkout</h2>
                
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($checkoutPlans->isEmpty())
                    <p>Your cart is empty.</p>
                @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($checkoutPlans as $plan)
                                <tr>
                                    <td>{{ $plan->product->name }}</td>
                                    <td>{{ $plan->product->description }}</td>
                                    <td>${{ number_format($plan->product->price, 2) }}</td>
                                    <td>
                                        <form method="post" action="{{ route('checkout.destroy', $plan->id) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-primary">Remove</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <p><strong>Total Price: ${{ number_format($checkoutPlans->sum(fn($plan) => $plan->product->price), 2) }}</strong></p>
                @endif
            </div>
        </div>
    </div>
</x-layout>
