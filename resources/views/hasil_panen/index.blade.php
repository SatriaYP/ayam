@extends('layouts.app')

@section('title', 'Hasil Panen')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Hasil Panen</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-12 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-11">
                        <h5 class="text-primary mt-1">Tabel Hasil Panen</h5>
                    </div>
                </div>
                <table class="table mt-2 table-striped">
                    <thead>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Jumlah Ayam</th>
                        <th>Bobot Ayam</th>
                        <th>Peternakan</th>
                        <th>Sopir</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $hasilPanen)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $hasilPanen->tanggal }}</td>
                                <td>{{ $hasilPanen->jumlah_ayam }}</td>
                                <td>{{ $hasilPanen->bobot_ayam }}</td>
                                <td>{{ $hasilPanen->peternakan->nama_peternakan }}</td>
                                <td>{{ $hasilPanen->sopir->nama_sopir }}</td>
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
