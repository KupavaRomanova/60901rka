@extends('layout')

@section('content')
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="product_name">Название продукта</label>
        <input type="text" class="form-control @error('product_name') is-invalid @enderror" id="product_name" name="product_name" value="{{ old('product_name') }}">
        @error('product_name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="owner_id">Владелец</label>
        <select class="form-control @error('owner_id') is-invalid @enderror" id="owner_id" name="owner_id">
            @foreach ($owners as $owner)
                <option value="{{ $owner->id }}" {{ old('owner_id') == $owner->id ? 'selected' : '' }}>{{ $owner->name }}</option>
            @endforeach
        </select>
        @error('owner_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="category_id">Категория</label>
        <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->category_name }}</option>
            @endforeach
        </select>
        @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Описание</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Цена</label>
        <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{ old('price') }}">
        @error('price')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="photo">Фото</label>
        <input type="file" class="form-control-file @error('photo') is-invalid @enderror" id="photo" name="photo">
        @error('photo')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="count">Количество</label>
        <input type="number" class="form-control @error('count') is-invalid @enderror" id="count" name="count" value="{{ old('count') }}">
        @error('count')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Создать</button>
</form>
@endsection