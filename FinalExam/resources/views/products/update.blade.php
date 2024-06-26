<x-layout>
    <h2>Update Product</h2>
    <form method="post" action="{{ route('products.update', ['product' => $selectedProduct->id]) }}">
        @csrf
        @method('PUT') 

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" name="type" value="{{ $selectedProduct->type }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $selectedProduct->name }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" name="description" rows="3">{{ $selectedProduct->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" value="{{ $selectedProduct->price }}">
        </div>

        <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
</x-layout>
