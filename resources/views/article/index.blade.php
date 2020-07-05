@extends('layouts.master')

@section('content')
<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>JUDUL</th>
            <th>ISI</th>
            <th>SLUG</th>
            <th>TAG</th>
            <th> - </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($list as $l)
        <tr>
            <td>{{$l->id }}</td>
            <td>{{$l->judul }}</td>
            <td>{{$l->isi }}</td>
            <td>{{$l->slug }}</td>
            <td>{{$l->tag }}</td>
            <td>
                <a href="/article/{{$l->id}}" class="btn btn-info"><i class="fa fa-info-circle"
                        aria-hidden="true"></i></a>
                <a href="/article/{{$l->id}}/edit" class="btn btn-warning"><i class="fa fa-edit"
                        aria-hidden="true"></i></a>
                <form action="/article/{{$l->id}}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button>
                </form>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
@endsection
@push('scripts')    
    <script>
        swal.fire({
            title: 'Berhasil!',
            text: 'Memasangkan script sweet alert',
            icon: 'success',
            confirmButtonText: 'Cool'
        })                
    </script>
@endpush
