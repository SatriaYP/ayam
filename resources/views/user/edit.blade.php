@extends('layouts.app')

@section('title', 'Edit User')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Edit User</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="nama">Name</label>
                        <input type="text" name="nama" class="form-control" value="{{ $user->nama }}">
                    </div>

                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="kode" name="kode" class="form-control" value="{{ $user->kode }}">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No Telpon</label>
                        <input type="no_telp" name="no_telp" class="form-control" value="{{ $user->no_telp }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Update User</button>
                    <a href="{{ route('user.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
