@extends('layout.base')

@section('pageContent')
<h1>Inserisci un nuovo fumetto:</h1>
<form action="{{route('comics.store')}}" method = "post">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data Uscita</label>
        <input type="date" class="form-control" id="sale_date" name="sale_date">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
    <div class="mb-3">
        <label for="thumb" class="form-label">Url/File Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb">
    </div>


    <button type="submit" class="btn btn-primary">Crea</button>
</form>


@endsection