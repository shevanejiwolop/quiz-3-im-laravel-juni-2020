@extends('layouts.master')
@section('content')
<div class="card" style="width: 100rem;">
    <div class="card-body">
    <h5 class="card-title">Judul : {{$article->judul}}</h5>
    <h6 class="card-subtitle mb-2 text-muted">slug : {{$article->slug}}</h6>
    <p class="card-text">{{$article->isi}}</p>
        @foreach ($tag as $item)
        <a href="#" class="btn btn-success">{{$item}}</a>    
        @endforeach                
    </div>
</div>
@endsection
