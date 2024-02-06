@extends('layouts.app')

@section('title', 'Tambah Data Sopir')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Tambah Data Sopir</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('data_sopir.store') }}" method="POST">
                    @csrf
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama_sopir">Nama Sopir</label>
                        <input type="text" name="nama_sopir" class="form-control" value="{{ old('nama_sopir') }}">
                    </div>

                    <div class="form-group">
                        <label for="nopol">Nomor Polisi</label>
                        <input type="text" name="nopol" class="form-control" value="{{ old('nopol') }}">
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="Sedia" {{ old('status') == 'Sedia' ? 'selected' : '' }}>Sedia</option>
                            <option value="Tidak Tersedia" {{ old('status') == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah</button>
                    <a href="{{ route('data_sopir.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
