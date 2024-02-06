@extends('layouts.app')

@section('title', 'User Management')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>User Management</h1>
        </div>
        <div class="section-body">
            <div class="card p-3">
                <div class="row mb-3">
                    <div class="col-12">
                        <a href="{{ route('user.create') }}" class="btn btn-primary">Add User</a>
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
                        <th>Kode</th>
                        <!-- <th>Password</th> -->
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $user)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $user->nama }}</td>
                                <td>{{ $user->kode }}</td>
                                <!-- <td>{{ $user->password }}</td> -->
                                <td>
                                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4">No users available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
