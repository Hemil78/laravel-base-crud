@extends('layout.base')

@section('pageContent')
<h1>Modifica le informazioni di {{$comic['title']}}</h1>
<form action="{{route('comics.update', $comic['id'])}}" method = "post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" name="title" value="{{$comic['title']}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipo</label>
        <input type="text" class="form-control" id="type" name="type" value="{{$comic['type']}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data Uscita</label>
        <input type="date" class="form-control" id="sale_date" name="" value="{{$comic['sale_date']}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="price" name="price" value="{{$comic['price']}}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$comic['description']}}</textarea>
    <div class="mb-3">
        <label for="thumb" class="form-label">Url/File Immagine</label>
        <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic['thumb']}}">
    </div>


    <button type="submit" class="btn btn-warning">Modifica</button>
</form>


@endsection