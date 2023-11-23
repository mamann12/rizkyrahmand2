@extends('layout.main');
@section('title','Fakultas')

    @section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Ubah Fakultas</h4>
                <p class="card-description">
                  Formulir Ubah Fakultas
                </p>
                <form class="forms-sample" method="POST" action="{{ route('fakultas.update', $fakultas->id) }}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Fakultas</label>
                      <input type="text" class="form-control" name="nama" placeholder="Nama Fakultas" value="{{$fakultas->nama}}">
                      @error('nama')
                          <label class="text-danger">{{ $message }}</label>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Simpan</button>
                    <a href="{{ url('fakultas') }}" class="btn btn-light">Batal</a>
                </form>
              </div>
            </div>
        </div>
    </div>
    @endsection

