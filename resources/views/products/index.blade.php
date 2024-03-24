


    <h1>Products</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Owner</th>
                <th>Category</th>
                <th>Description</th>
                <th>Price</th>
                <th>Photo</th>
                <th>Count</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->owner->name }}</td>
                    <td>{{ $product->category->category_name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ asset($product->photo) }}" alt="{{ $product->product_name }}" width="100"></td>
                    <td>{{ $product->count }}</td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary">Редактировать</a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Вы уверены, что хотите удалить?')">Удалить</button>
                    </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>

