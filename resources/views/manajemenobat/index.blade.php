@extends('layouts.app')

@section('title', 'Manajemen Obat')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajemen Obat</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-12 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-11">
                        <h5 class="text-primary mt-1">Tabel Manajemen Obat</h5>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('manajemenobat.create') }}" class="btn btn-primary">+</a>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table mt-2 table-striped">
                    <thead>
                        <th>#</th>
                        <th>Tanggal Masuk</th>
                        <th>Stok</th>
                        <th>Obat</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $manajemenObat)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $manajemenObat->tanggal_masuk }}</td>
                                <td>{{ $manajemenObat->stok }}</td>
                                <td>{{ $manajemenObat->obat->nama_obat }}</td>
                                <td>
                                    <a href="{{ route('manajemenobat.edit', $manajemenObat->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('manajemenobat.destroy', $manajemenObat->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
