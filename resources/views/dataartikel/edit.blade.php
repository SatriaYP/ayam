@extends('layouts.app')

@section('title', 'Edit Data Artikel')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Artikel</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('dataartikel.update', $dataArtikel->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" value="{{ $dataArtikel->judul }}">
                    </div>

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <input type="text" name="kategori" class="form-control" value="{{ $dataArtikel->kategori }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{ $dataArtikel->deskripsi }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Data Artikel</button>
                    <a href="{{ route('dataartikel.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
    