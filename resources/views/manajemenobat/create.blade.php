@extends('layouts.app')

@section('title', 'Add Manajemen Obat')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Manajemen Obat</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('manajemenobat.store') }}" method="POST">
                    @csrf

                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" value="{{ old('tanggal_masuk') }}">
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{ old('stok') }}">
                    </div>

                    <div class="form-group">
                        <label for="id_obat">Obat</label>
                        <select name="id_obat" class="form-control">
                            @foreach($obat as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_obat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Manajemen Obat</button>
                    <a href="{{ route('manajemenobat.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
