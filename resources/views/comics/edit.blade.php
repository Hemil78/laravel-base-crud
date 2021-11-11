@extends('layout.base')

@section('pageContent')
<h1>Modifica le informazioni di {{$comic['title']}}</h1>
<form action="{{route('comics.update', $comic['id'])}}" method = "post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{old('title') ? old('title') : $comic['title']}}">
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" value="{{old('type') ? old('type') : $comic['type']}}">
        @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data Uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date" value="{{old('sale_date') ? old('sale_date') : $comic['sale_date']}}">
        @error('sale_date')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" value="{{old('price') ? old('price') : $comic['price']}}">
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{old('description') ? old('description') : $comic['description']}}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">Url/File Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb') ? old('thumb') : $comic['thumb']}}">
        @error('thumb')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>


    <button type="submit" class="btn btn-warning">Modifica</button>
</form>


@endsection