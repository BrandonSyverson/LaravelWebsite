<x-layout>
    <div class="container-fluid">
        <h2>Create New Transaction</h2>

        <form method="post" action="{{ route('transactions.store') }}">
            @csrf

            <div class="mb-3">
                <label for="date" class="form-label">Transaction Date</label>
                <input type="date" class="form-control" name="date" required>
            </div>

            <div class="mb-3">
                <label for="product" class="form-label">Product</label>
                <input type="text" class="form-control" name="product" required>
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="text" class="form-control" name="price" required>
            </div>

            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" class="form-control" name="customer_name" required>
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input type="text" class="form-control" name="type" required>
            </div>

            <button type="submit" class="btn btn-primary">Add Transaction</button>
        </form>
    </div>
</x-layout>
