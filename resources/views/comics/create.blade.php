@extends('layouts.base')

@section('content')
<form class="my-5" method="post" action="{{ route('comics.store') }}" style="width: 600px">
    @csrf()
    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input
        type="string"
        class="form-control"
        id="title"
        name="title">

    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        {{-- <input
        type="text"
        class="form-control"
        id="description"
        name="description"
        value="{{ $comic->description }}"> --}}
        <textarea class="form-control" name="description" id="description"></textarea>

    </div>

    <div class="mb-3">
        <label for="thumb" class="form-label">Copertina</label>
        <input
        type="text"
        class="form-control"
        id="thumb"
        name="thumb">

    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input
        type="number"
        class="form-control"
        id="price"
        name="price">

    </div>
    <div class="mb-3">
        <label for="series" class="form-label">Serie</label>
        <input
        type="string"
        class="form-control"
        id="series"
        name="series">

    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">Data di uscita</label>
        <input
        type="date"
        class="form-control"
        id="sale_date"
        name="sale_date">

    </div>
    <div class="mb-3">
        <label for="type" class="form-label">Tipologia</label>
        <input
        type="string"
        class="form-control"
        id="type"
        name="type">

    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection

