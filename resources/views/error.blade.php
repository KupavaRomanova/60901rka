<!DOCTYPE html>
<html>
<head>
    <title>Error</title>
</head>
<body>
    <h1>Error</h1>
    <p>{{ session('error') }}</p>
</body>
</html>








<!-- <!DOCTYPE html>
<html>
<body>
    @section('content')
    <h1>Error</h1>
    <p>{{ session('error') }}</p>

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
</body>
</html> -->


