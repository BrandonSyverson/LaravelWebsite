<x-layout>
    <div class="container-fluid">
        <h2>All Transactions</h2>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <a href="{{ route('transactions.create') }}" class="btn btn-primary">Add New Transaction</a>

        @if ($transactions->isEmpty())
            <p>No transactions found.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Date</th>
                        <th>Product</th>
                        <th>Type</th> 
                        <th>Price</th>
                        <th>Customer Name</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->id }}</td>
                            <td>{{ $transaction->date }}</td>
                            <td>{{ $transaction->product }}</td>
                            <td>{{ $transaction->type }}</td> 
                            <td>{{ $transaction->price }}</td>
                            <td>{{ $transaction->customer_name }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
</x-layout>
