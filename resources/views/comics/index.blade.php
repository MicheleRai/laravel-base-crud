@extends('layouts.base')

@section('content')
@if (session('delete_success'))
    <div class="alert alert-success">
        Il post con id {{ session('success_delete') }} e' stato eliminato correttamente
    </div>
@endif
<div class="container row aligns-items-center justify-content-center">
    @foreach ($comics as $comic)
        <div class="col-sm-4 my-3 d-flex aligns-items-center justify-content-center">
            <div class="card text-center" style="width: 20rem">
                <img class="card-img-top" src="{{$comic->thumb}}" alt="copertina">
                <div class="card-body">
                    <h5 class="card-title">{{$comic->series}}</h5>
                    <a href="{{ route('comics.show', ['comic' => $comic->id])}}" class="btn btn-primary">Info</a>
                    <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning">Modifica</a>
                    <form class="m-1" action="{{ route('comics.destroy', ['comic' => $comic->id]) }} " method="post">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">ELIMINA</button>
                    </form>

                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
