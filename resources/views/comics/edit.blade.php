@extends('layouts.base')

@section('content')
<form class="my-5" method="post" action="{{ route('comics.update', ['comic' => $comic]) }}" style="width: 600px">>
    @csrf()
    @method('put')
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input
        type="string"
        class="form-control"
        id="title"
        name="title"
        value="{{ $comic->title }}">

    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        {{-- <input
        type="text"
        class="form-control"
        id="description"
        name="description"
        value="{{ $comic->description }}"> --}}
        <textarea class="form-control" name="description" id="description">{{ $comic->description }}</textarea>

    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input
        type="text"
        class="form-control"
        id="thumb"
        name="thumb"
        value="{{ $comic->thumb }}">
        {{-- <textarea name="thumb" id="thumb" cols="30" rows="10">{{ $comic->thumb }}</textarea> --}}

    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input
        type="number"
        class="form-control"
        id="price"
        name="price"
        value="{{ $comic->price }}">

    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input
        type="string"
        class="form-control"
        id="series"
        name="series"
        value="{{ $comic->series }}">

    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input
        type="date"
        class="form-control"
        id="sale_date"
        name="sale_date"
        value="{{ $comic->sale_date }}">

    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input
        type="string"
        class="form-control"
        id="type"
        name="type"
        value="{{ $comic->type }}">

    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection

