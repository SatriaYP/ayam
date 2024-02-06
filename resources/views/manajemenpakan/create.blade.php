@extends('layouts.app')

@section('title', 'Add Manajemen Pakan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Manajemen Pakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('manajemenpakan.store') }}" method="POST">
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
                        <label for="id_pakan">Pakan</label>
                        <select name="id_pakan" class="form-control">
                            @foreach($pakan as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_pakan }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Add Manajemen Pakan</button>
                    <a href="{{ route('manajemenpakan.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
