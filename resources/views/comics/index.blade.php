@extends('layouts.base')

@section('content')
<div class="container row aligns-items-center justify-content-center">
    @foreach ($comics as $comic)
        <div class="col-sm-4 my-3">
            <div class="card text-center" style="width: 20rem">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="copertina">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->series}}</h5>
                    <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Info</a>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Modifica</a>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
