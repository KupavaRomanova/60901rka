


    <h1>Orders</h1>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Address</th>
                <th>Date of Purchase</th>
                <th>Date of Receipt</th>
                <th>Value</th>
                <th>Created at</th>
                <th>Updated at</th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->adress }}</td>
                    <td>{{ $order->date_of_purchase }}</td>
                    <td>{{ $order->date_of_receipt }}</td>
                    <td>{{ $order->val }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
