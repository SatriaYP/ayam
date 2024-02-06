@extends('layouts.app')

@section('title', 'Data Peternakan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Peternakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-12 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-11">
                        <h5 class="text-primary mt-1">Tabel Peternakan</h5>
                    </div>
                    <div class="col-1">
                        <a href="{{ route('data_peternakan.create') }}" class="btn btn-primary">+</a>
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
                        <th>Nama Peternakan</th>
                        <th>Kapasitas</th>
                        <th>Alamat</th>
                        <th>No. Telepon</th>
                        <th>User</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $datapeternakan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $datapeternakan->nama_peternakan }}</td>
                                <td>{{ $datapeternakan->kapasitas }}</td>
                                <td>{{ $datapeternakan->alamat }}</td>
                                <td>{{ $datapeternakan->no_telp }}</td>
                                <td>{{ $datapeternakan->nama }}</td>
                                <td>
                                    <a href="{{ route('data_peternakan.edit', $datapeternakan->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('data_peternakan.destroy', $datapeternakan->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this data peternakan?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
