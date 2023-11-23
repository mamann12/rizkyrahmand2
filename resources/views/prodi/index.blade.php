@extends('layout.main')
@section('title', 'Program Studi')

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Program Studi</h4>
                <p class="card-description">
                  Daftar Program Studi di Universitas MDP
                </p>
                <a href="{{ route('prodi.create') }}" class="btn btn-primary btn-rounded btn-fw">Tambah</a>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                        <tr>
                            <td>Nama Prodi</td>
                            <td>Nama Fakultas</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($prodi as $item)
                        <tr>
                            <td>{{$item['name']}}</td>
                            <td>{{$item['fakultas']['nama']}}</td>
                            <td>
                                <div class="d-flex justify-content-center">
                                    <a href="{{route('prodi.edit', $item->id)}}">
                                    <button class="btn btn-success btn-sm">Edit</button>
                                     </a>
                                    <form method="POST" action="{{route('prodi.destroy', $item->id)}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>

                                </div>

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
