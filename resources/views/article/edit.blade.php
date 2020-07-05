@extends('layouts.master')
@section('content')
<form action="/article/{{$article->id}}" method="POST" class="m-3">
    @csrf
    @method('PUT')
    <div class="form-group">
    <label for="judul">JUDUL : {{$article->judul}} (SEBELUM DI UPDATE)</label>
    <input type="judul" class="form-control" placeholder="Tulis UPDATE Judul Disini !" id="judul" name="judul"  required >
    </div>
    <div class="form-group">
    <label for="isi">ISI : {{$article->isi}} (SEBELUM DI UPDATE)</label>
        <textarea class="form-control" name="isi" id="isi" cols="30" rows="10"
    placeholder="Tulis UPDATE Isi Disini !"></textarea>
    </div>
    <div class="form-group mb-3">
    <label for="judul">TAG SEBELUM DI UPDATE : {{$article->tag}}</label>
        <input type="judul" class="form-control" placeholder="Tulis Tag Disini ! (TULIS TAG DENGAN PEMISAH KOMA)" id="tag" name="tag" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
