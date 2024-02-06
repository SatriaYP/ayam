@extends('layouts.app')

@section('title', 'Tambah Data Obat')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Obat</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('data_obat.store') }}" method="POST">
                    @csrf
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="{{ old('nama_obat') }}">
                    </div>

                    <div class="form-group">
                        <label for="jenis_obat">Jenis Obat</label>
                        <input type="text" name="jenis_obat" class="form-control" value="{{ old('jenis_obat') }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{ old('deskripsi') }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="fungsi">Fungsi</label>
                        <textarea name="fungsi" class="form-control">{{ old('fungsi') }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('data_obat.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
