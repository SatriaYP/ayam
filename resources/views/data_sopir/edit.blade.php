@extends('layouts.app')

@section('title', 'Edit Data Sopir')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Sopir</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('data_sopir.update', $dataSopir->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama_sopir">Nama Sopir</label>
                        <input type="text" name="nama_sopir" class="form-control" value="{{ $dataSopir->nama_sopir }}">
                    </div>

                    <div class="form-group">
                        <label for="nopol">Nomor Polisi</label>
                        <input type="text" name="nopol" class="form-control" value="{{ $dataSopir->nopol }}">
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="{{ $dataSopir->no_telp }}">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <select name="status" class="form-control">
                            <option value="Sedia" {{ $dataSopir->status == 'Sedia' ? 'selected' : '' }}>Sedia</option>
                            <option value="Tidak Tersedia" {{ $dataSopir->status == 'Tidak Tersedia' ? 'selected' : '' }}>Tidak Tersedia</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('data_sopir.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
