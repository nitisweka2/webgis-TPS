@extends('layout.v_template')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-4">
        <div class="card z-index-2">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Edit Informasi TPS</h6>
            </div>
            <div class="card-body px-4">
                @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
                @endif

                <form action="{{ route('tps.update', $tps->no_tps) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="nama_tps" class="form-label">Nama TPS</label>
                        <input type="text" class="form-control" id="nama_tps" name="nama_tps" value="{{ $tps->nama_tps }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="jenis_tps" class="form-label">Jenis TPS</label>
                        <input type="text" class="form-control" id="jenis_tps" name="jenis_tps" value="{{ $tps->jenis_tps }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="kelas_tps" class="form-label">Kelas TPS</label>
                        <input type="text" class="form-control" id="kelas_tps" name="kelas_tps" value="{{ $tps->kelas_tps }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="status_tanah" class="form-label">Status Tanah</label>
                        <input type="text" class="form-control" id="status_tanah" name="status_tanah" value="{{ $tps->status_tanah }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="volume" class="form-label">Volume</label>
                        <input type="text" class="form-control" id="volume" name="volume" value="{{ $tps->volume }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $tps->latitude }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $tps->longitude }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $tps->alamat }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="pelayanan" class="form-label">Pelayanan</label>
                        <input type="text" class="form-control" id="pelayanan" name="pelayanan" value="{{ $tps->pelayanan }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="keadaan" class="form-label">Keadaan</label>
                        <select class="form-control" id="keadaan" name="keadaan" required>
                            <option value="penuh" {{ $tps->keadaan === 'penuh' ? 'selected' : '' }}>Penuh</option>
                            <option value="tidak penuh" {{ $tps->keadaan === 'tidak penuh' ? 'selected' : '' }}>Tidak Penuh</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
