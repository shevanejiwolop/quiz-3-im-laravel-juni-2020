@extends('layouts.master')
@section('content')
  <form action="/article" method="POST" class="m-3">
  @csrf
  <div class="form-group">
    <label for="judul">JUDUL :</label>
    <input type="judul" class="form-control" placeholder="Tulis Judul Disini !" id="judul" name="judul" required>
  </div>
  <div class="form-group">
    <label for="isi">ISI :</label>
    <textarea class="form-control" name="isi" id="isi" cols="30" rows="10" placeholder="Tulis Isi Disini !"></textarea>
  </div>
  <div class="form-group mb-3">
    <label for="judul">TAG (PISAH TAG DENGAN KOMA ,)</label>
    <input type="judul" class="form-control" placeholder="Tulis Tag Disini !" id="tag" name="tag" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection