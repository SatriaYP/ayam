@extends('layouts.app')

@section('title', 'Add Data Peternakan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Data Peternakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('data_peternakan.store') }}" method="POST">
                    @csrf

                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama_peternakan">Nama Peternakan</label>
                        <input type="text" name="nama_peternakan" class="form-control" value="{{ old('nama_peternakan') }}">
                    </div>

                    <div class="form-group">
                        <label for="kapasitas">Kapasitas</label>
                        <input type="number" name="kapasitas" class="form-control" value="{{ old('kapasitas') }}">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" class="form-control">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
                    </div>

                    <div class="form-group">
                        <label for="id_user">ID User</label>
                        <select name="id_user">
                            @foreach($data_user as $du)
                            <option value="{{$du->id}}">{{$du->nama}}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Data Peternakan</button>
                    <a href="{{ route('data_peternakan.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
