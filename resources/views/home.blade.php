@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card-deck">
        @foreach($ticket as $p)
        <div class="card">
          <img class="card-img-top"  src="{{ url('/data_file/'.$p->image) }}" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">{{$p->title}}</h5>
            <p class="card-text">{{$p->description}}</p>
          <b>Rating {{$p->rating}}</b>
          <p class="card-text"><b class="text-muted">Rp.{{$p->harga}}</b></p>
          <a href="/pesan{{$p->id}}"><input type="submit" class="btn btn-primary" value="Pesan Sekarang"></a>
          </div>
        </div>
        @endforeach
    </div>
</div>





@endsection
