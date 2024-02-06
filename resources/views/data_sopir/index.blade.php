@extends('layouts.app')

@section('title', 'Data Sopir')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Sopir</h1>
        </div>
        <div class="section-body">
            <div class="card p-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ route('data_sopir.create') }}" class="btn btn-primary">Tambah Data Sopir</a>
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
                        <th>Nama Sopir</th>
                        <th>Nomor Polisi</th>
                        <th>Nomor Telepon</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_sopir }}</td>
                                <td>{{ $item->nopol }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <a href="{{ route('data_sopir.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('data_sopir.destroy', $item->id) }}" method="POST" class="d-inline">
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
