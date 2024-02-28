@extends('layout.v_template')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-4">
        <div class="card z-index-2">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Informasi Mengenai Sampah</h6>
                <p class="text-sm mb-0">
                    <i class="fa fa-trash text-primary"></i>
                    Informasi Sampah
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <form action="{{ route('tps.search') }}" method="GET" class="form-inline">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Cari nama TPS" value="{{ $search ?? '' }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary">Cari</button>
                            </div>
                        </div>
                    </form>
                    <div class="d-flex">
                        <a href="{{ route('tps.create') }}" class="btn bg-gradient-dark ml-2"><i class="fas fa-plus"></i>&nbsp;&nbsp;Tambah Data</a>
                        <a href="/keluh_kesah/data" class="btn btn-danger ml-2">&nbsp;&nbsp;Lihat Keluhan Masyarakat</a>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama TPS</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jenis TPS</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Kelas TPS</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Status Tanah</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Volume</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pelayanan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Keadaan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_tps as $key => $tps)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $tps->nama_tps }}</td>
                                <td>{{ $tps->jenis_tps }}</td>
                                <td>{{ $tps->kelas_tps }}</td>
                                <td>{{ $tps->status_tanah }}</td>
                                <td>{{ $tps->volume }}{{ ' Ton' }}</td>
                                <td>{{ $tps->alamat }}</td>
                                <td>{{ $tps->pelayanan }}</td>
                                <td>{{ $tps->keadaan }}</td>
                                <td>
                                    <div class="ms-auto text-end">
                                        <a href="{{ route('tps.edit', $tps->no_tps) }}" class="btn btn-link text-dark px-3 mb-0"><i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>Edit</a>
                                        <form action="{{ route('tps.destroy', $tps->no_tps) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-link text-danger text-gradient px-3 mb-0"><i class="far fa-trash-alt me-2"></i>Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-center">
    {{ $tb_tps->links() }}
</div>
@endsection
