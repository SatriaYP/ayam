@extends('layouts.app')

@section('title', 'Blank Page')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Data Pakan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-12 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-11">
                        <h5 class="text-primary mt-1">Tabel Pakan</h5>
                    </div>
                    <div class="col-1">
                        <a href="" class="btn btn-primary">+</a>
                    </div>
                </div>
                <table class="table mt-2 table-striped">
                        <thead>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Stok</th>
                        <th>Deskripsi</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>3</td>
                                <td>3</td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush