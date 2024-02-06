@extends('layouts.app')

@section('title', 'Manajemen Bibit Ayam Masuk')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Manajemen Bibit Ayam Masuk</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-12 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-11">
                        <h5 class="text-primary mt-1">Tabel Manajemen Bibit Ayam Masuk</h5>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('manajemenbibitayammasuk.create') }}" class="btn btn-primary">+</a>
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
                        <th>Tanggal</th>
                        <th>Jumlah Bibit</th>
                        <th>Peternakan</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $manajemenBibit)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $manajemenBibit->tanggal }}</td>
                                <td>{{ $manajemenBibit->jumlah_bibit }}</td>
                                <td>{{ $manajemenBibit->peternakan->nama_peternakan }}</td>
                                <td>
                                    <a href="{{ route('manajemenbibitayammasuk.edit', $manajemenBibit->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('manajemenbibitayammasuk.destroy', $manajemenBibit->id) }}" method="POST" class="d-inline">
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