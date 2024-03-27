<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-01</title>
</head>
<body>
    <!-- <h1>609-01</h1> -->

    @extends('layout')

    <!-- <form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button> -->

    @section('content')
    @if (Auth::check())
        <div>
            <h1>Welcome, {{ Auth::user()->name }}</h1>
    
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
        </div>
    @endif
    @endsection
</form>
</body>
</html>