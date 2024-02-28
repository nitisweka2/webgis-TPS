<!-- resources/views/keluh_kesah_index.blade.php -->

@extends('layout.v_template')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-4">
        <div class="card z-index-2">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Keluh Kesah Warga</h6>
                <p class="text-sm mb-0">
                    <i class="fa fa-comment text-primary"></i>
                    Keluh Kesah Warga
                </p>
            </div>
            <div class="card">
                <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Subjek</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pesan</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tanggal</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tb_keluhan as $key => $keluhan)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $keluhan->subjek }}</td>
                                <td>{{ $keluhan->pesan }}</td>
                                <td>{{ $keluhan->created_at }}</td>
                                <td>
                                    <div class="ms-auto text-end">
                                        {{-- <a href="{{ route('keluh_kesah.detail', $keluhan->id) }}" class="btn btn-info btn-sm">Detail</a> --}}
                                        <form action="{{ route('keluh_kesah.destroy', $keluhan->no) }}" method="POST" style="display: inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
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
    {{ $tb_keluhan->links() }}
</div>
@endsection
