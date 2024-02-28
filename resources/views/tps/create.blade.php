@extends('layout.v_template')

@section('content')
<div class="row mt-4">
    <div class="col-lg-12 mb-4">
        <div class="card z-index-2">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Tambah Data TPS</h6>
                <p class="text-sm mb-0">
                    <i class="fa fa-plus text-primary"></i>
                    Tambah Data TPS
                </p>
            </div>
            <div class="card-body px-4 pt-0 pb-2">
                <form action="{{ route('tps.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="nama_tps" class="form-label">Nama TPS</label>
                        <input type="text" class="form-control" id="nama_tps" name="nama_tps" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_tps" class="form-label">Jenis TPS</label>
                        <input type="text" class="form-control" id="jenis_tps" name="jenis_tps" required>
                    </div>
                    <div class="mb-3">
                        <label for="kelas_tps" class="form-label">Kelas TPS</label>
                        <input type="text" class="form-control" id="kelas_tps" name="kelas_tps" required>
                    </div>
                    <div class="mb-3">
                        <label for="status_tanah" class="form-label">Status Tanah</label>
                        <input type="text" class="form-control" id="status_tanah" name="status_tanah" required>
                    </div>
                    <div class="mb-3">
                        <label for="volume" class="form-label">Volume</label>
                        <input type="number" class="form-control" id="volume" name="volume" required>
                    </div>
                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude</label>
                        <input type="text" class="form-control" id="latitude" name="latitude" required>
                    </div>
                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude</label>
                        <input type="text" class="form-control" id="longitude" name="longitude" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="pelayanan" class="form-label">Pelayanan</label>
                        <input type="text" class="form-control" id="pelayanan" name="pelayanan" required>
                    </div>
                    <div class="mb-3">
                        <label for="keadaan" class="form-label">Keadaan</label>
                        <input type="text" class="form-control" id="keadaan" name="keadaan" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
