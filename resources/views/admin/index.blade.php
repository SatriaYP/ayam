@extends('layouts.app')

@section('title', 'Admin Management')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Admin Management</h1>
        </div>
        <div class="section-body">
            <div class="card p-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ route('admin.create') }}" class="btn btn-primary">Add Admin</a>
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
                        <th>Kode</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->kode }}</td>
                                <td>{{ $admin->nama }}</td>
                                <td>{{ $admin->email }}</td>
                                <td>{{ $admin->no_telp }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $admin->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this admin?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6">No admins available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
