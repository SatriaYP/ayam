@extends('layouts.app')

@section('title', 'Perkembangan')

@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Perkembangan</h1>
        </div>
        <div class="section-body">
            <div class="card p-3 col-lg-12 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-11">
                        <h5 class="text-primary mt-1">Tabel Perkembangan</h5>
                    </div>
                </div>
                <table class="table mt-2 table-striped">
                    <thead>
                        <th>#</th>
                        <th>Tanggal</th>
                        <th>Minggu Ke</th>
                        <th>Pakan Pakai</th>
                        <th>Pakan Sisa</th>
                        <th>Bobot</th>
                        <th>Afkir</th>
                        <th>Kematian</th>
                        <th>Peternakan</th>
                    </thead>
                    <tbody>
                        @forelse ($data as $perkembangan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $perkembangan->tanggal }}</td>
                                <td>{{ $perkembangan->minggu_ke }}</td>
                                <td>{{ $perkembangan->pakan_pakai }}</td>
                                <td>{{ $perkembangan->pakan_sisa }}</td>
                                <td>{{ $perkembangan->bobot }}</td>
                                <td>{{ $perkembangan->afkir }}</td>
                                <td>{{ $perkembangan->kematian }}</td>
                                <td>{{ $perkembangan->peternakan->nama_peternakan }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
