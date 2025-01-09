@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Siawa') }}</div>

                <div class="card-body">

                    @if (session('succes'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('succes')}}
                        <button type="button" class="btn-close" data-bs-dinamis="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <a href="{{ route('siswa.create')}}" class="btn btn-primary">Add</a>
                        <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kelas</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @php $no =1; @endphp
    @foreach($siswa as $data)
    <tr>
      <th scope="row">{{ $no++ }}</th>
      <td>{{$data->nis}}</td>
      <td>{{$data->nama}}</td>
      <td>{{$data->jenis_kelamin}}</td>
      <td>{{$data->kelas}}</td>
      <td>
        <a href="{{ route('siswa.edit', $data->id)}}" class="btn btn-success">Edit</a>
        <a href="{{ route('siswa.edit', $data->id)}}" class="btn btn-warning">Show</a>

        <form action="{{ route('siswa.destroy', $data->id)}}" method="POST">
            @csrf
            @method('DELETE')
         <button href="" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?')">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
