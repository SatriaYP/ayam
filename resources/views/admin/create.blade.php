@extends('layouts.app')

@section('title', 'Add Admin')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Add Admin</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-6 col-md-6 col-sm-6">
                <form action="{{ route('admin.store') }}" method="POST">
                    @csrf
                    
                    <!-- Your form fields here -->
                    <div class="form-group">
                        <label for="kode">Kode</label>
                        <input type="text" name="kode" class="form-control" value="{{ old('kode') }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                    </div>

                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Add Admin</button>
                    <a href="{{ route('admin.index') }}" class="btn btn-danger">Cancel</a>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
