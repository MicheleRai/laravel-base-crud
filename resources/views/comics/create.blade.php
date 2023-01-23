@extends('layouts.base')

@section('content')
<form class="my-5" method="post" action="{{ route('comics.store') }}">
    @csrf()
    <div class="mb-3">

      <input
      type="string"
      class="form-control"
      id="title"
      name="title">

    </div>

    <div class="mb-3">

        <input
        type="text"
        class="form-control"
        id="description"
        name="description">

    </div>

    <div class="mb-3">

        <input
        type="text"
        class="form-control"
        id="thumb"
        name="thumb">

    </div>
    <div class="mb-3">

        <input
        type="number"
        class="form-control"
        id="price"
        name="price">

    </div>
    <div class="mb-3">

        <input
        type="string"
        class="form-control"
        id="series"
        name="series">

    </div>
    <div class="mb-3">

        <input
        type="date"
        class="form-control"
        id="sale_date"
        name="sale_date">

    </div>
    <div class="mb-3">

        <input
        type="string"
        class="form-control"
        id="type"
        name="type">

    </div>

    <button type="submit" class="btn btn-primary">Aggiungi</button>
  </form>
@endsection

