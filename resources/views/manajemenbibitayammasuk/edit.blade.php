@extends('layouts.app')

@section('title', 'Edit Manajemen Bibit Ayam Masuk')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Manajemen Bibit Ayam Masuk</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('manajemenbibitayammasuk.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" name="tanggal" class="form-control" value="{{ $data->tanggal }}">
                    </div>

                    <div class="form-group">
                        <label for="jumlah_bibit">Jumlah Bibit</label>
                        <input type="text" name="jumlah_bibit" class="form-control" value="{{ $data->jumlah_bibit }}">
                    </div>

                    <div class="form-group">
                        <label for="id_peternakan">Peternakan</label>
                        <select name="id_peternakan" class="form-control">
                            @foreach($peternakan as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $data->id_peternakan ? 'selected' : '' }}>{{ $item->nama_peternakan }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Manajemen Bibit Ayam Masuk</button>
                    <a href="{{ route('manajemenbibitayammasuk.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
