@extends('layouts.base')

@section('content')
<div class="container row aligns-items-center justify-content-center">
    <div class="col-sm-6 ">
        <div class="card text-center" style="width: 30rem">
            <img class="card-img-top" src="{{$comic->thumb}}" alt="copertina">
            <div class="card-body">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p class="card-text">{{$comic->series}}</p>
                <p class="card-text">{{$comic->sale_date}}</p>
                <p class="card-text">{{$comic->type}}</p>
                <p class="card-text">${{$comic->price}}</p>
                <p class="card-text">{{$comic->description}}</p>
                <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Modifica</a>
                <form class="m-1" action="{{ route('comics.edit', ['comic' => $comic->id]) }} " method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">ELIMINA</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
