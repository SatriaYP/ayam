@extends('layouts.app')

@section('title', 'Edit Data Obat')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Obat</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('data_obat.update', $dataObat->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama_obat">Nama Obat</label>
                        <input type="text" name="nama_obat" class="form-control" value="{{ $dataObat->nama_obat }}">
                    </div>

                    <div class="form-group">
                        <label for="jenis_obat">Jenis Obat</label>
                        <input type="text" name="jenis_obat" class="form-control" value="{{ $dataObat->jenis_obat }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{ $dataObat->deskripsi }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="fungsi">Fungsi</label>
                        <textarea name="fungsi" class="form-control">{{ $dataObat->fungsi }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('data_obat.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
