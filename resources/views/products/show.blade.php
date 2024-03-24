


    <h1>{{ $product->product_name }}</h1>

    <p>ID: {{ $product->id }}</p>
    <p>Owner: {{ $product->owner->name }}</p>
    <p>Category: {{ $product->category->category_name }}</p>
    <p>Description: {{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    <p>Photo: <img src="{{ asset($product->photo) }}" alt="{{ $product->product_name }}" width="100"></p>
    <p>Count: {{ $product->count }}</p>
    <p>Created at: {{ $product->created_at }}</p>
    <p>Updated at: {{ $product->updated_at }}</p>

    <h2>Orders</h2>
    <ul>
        @foreach($product->orders as $order)
            <li>{{ $order->id }}: {{ $order->user->name }} ({{ $order->adress }}) - {{ $order->pivot->count }} x {{ $order->pivot->val }}</li>
        @endforeach
    </ul>

