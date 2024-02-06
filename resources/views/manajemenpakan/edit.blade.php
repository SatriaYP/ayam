@extends('layouts.app')

@section('title', 'Edit Manajemen Pakan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit Manajemen Pakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('manajemenpakan.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" class="form-control" value="{{ $data->tanggal_masuk }}">
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="text" name="stok" class="form-control" value="{{ $data->stok }}">
                    </div>

                    <div class="form-group">
                        <label for="id_pakan">Pakan</label>
                        <select name="id_pakan" class="form-control">
                            @foreach($pakan as $item)
                                <option value="{{ $item->id }}" {{ $item->id == $data->id_pakan ? 'selected' : '' }}>{{ $item->nama_pakan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Manajemen Pakan</button>
                    <a href="{{ route('manajemenpakan.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
