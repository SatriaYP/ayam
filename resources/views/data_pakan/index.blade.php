@extends('layouts.app')

@section('title', 'Data Pakan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ route('data_pakan.create') }}" class="btn btn-primary">Tambah Data Pakan</a>
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
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Deskripsi</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_pakan }}</td>
                                <td>{{ $item->jenis_pakan }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>
                                    <a href="{{ route('data_pakan.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('data_pakan.destroy', $item->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?')">Delete</button>
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
