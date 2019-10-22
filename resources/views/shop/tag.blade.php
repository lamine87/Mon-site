@extends('page')
@section('content')
    <div class="tag">
        <div class="container">
            <div class="row">
                @foreach($tags as $tag)
                        <button type="button" href="{{route('voir_tag',['id'=>$artiste->id])}}" class="btn btn-primary"><strong>{{$tag->nom}}</strong>
                        </button>
                @endforeach
            </div>
        </div>
    </div>
@endsection
