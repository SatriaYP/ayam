@extends('layouts.app')

@section('title', 'Data Obat')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Obat</h1>
        </div>
        <div class="section-body">
            <div class="card p-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ route('data_obat.create') }}" class="btn btn-primary">Tambah Data Obat</a>
                    </div>
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Nama Obat</th>
                        <th>Jenis Obat</th>
                        <th>Deskripsi</th>
                        <th>Fungsi</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_obat }}</td>
                                <td>{{ $item->jenis_obat }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->fungsi }}</td>
                                <td>
                                    <a href="{{ route('data_obat.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('data_obat.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
