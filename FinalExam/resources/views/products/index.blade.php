<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2>List of Products</h2>
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <a href="{{ route('products.create') }}" class="btn btn-primary">Add New Product</a>

                <form method="GET" action="{{ route('products.index') }}" style="display: inline;">
                    <label for="product-filter" class="ms-3">Filter by Type:</label>
                    <select name="filter" id="product-filter" onchange="this.form.submit()" class="form-select form-select-sm" style="width: auto; display: inline-block;">
                        <option value="">All</option>
                        <option value="Phone" {{ request('filter') == 'Phone' ? 'selected' : '' }}>Phones</option>
                        <option value="Laptop" {{ request('filter') == 'Laptop' ? 'selected' : '' }}>Laptops</option>
                        <option value="TV" {{ request('filter') == 'TV' ? 'selected' : '' }}>TVs</option>
                        <option value="Monitor" {{ request('filter') == 'Monitor' ? 'selected' : '' }}>Monitors</option>
                    </select>
                </form>

                @if(!empty($products))
                <table class="table">
                    <thead>
                        <tr>
                            <th>Type</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Update</th> 
                            <th>Add to Cart</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $p)
                        <tr>
                            <td>{{ $p->type }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->description }}</td>
                            <td>${{ number_format($p->price, 2) }}</td>
                            <td><a href="{{ url('/updateproduct', [$p->id]) }}">Update</a></td>
                            <td>
                                <form method="post" action="{{ route('checkout.store') }}">
                                    @csrf
                                    <input type="hidden" name="product_id" value="{{ $p->id }}">
                                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @else
                <p>The product list is empty.</p>
                @endif
            </div>
        </div>
    </div>
</x-layout>
