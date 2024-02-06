@extends('layouts.app')

@section('title', 'Edit Data Pakan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Data Pakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('data_pakan.update', $dataPakan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama_pakan">Nama Pakan</label>
                        <input type="text" name="nama_pakan" class="form-control" value="{{ $dataPakan->nama_pakan }}">
                    </div>
                    <div class="form-group">
                        <label for="jenis_pakan">Jenis Pakan</label>
                        <input type="text" name="jenis_pakan" class="form-control" value="{{ $dataPakan->jenis_pakan }}">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea name="deskripsi" class="form-control">{{ $dataPakan->deskripsi }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('data_pakan.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
