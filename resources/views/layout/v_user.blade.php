@extends('layout.v_template')

@section('content')
<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Informasi untuk manajemen sampah</h6>
                <p class="text-sm mb-0">
                    <!-- <i class="fa fa-user text-primary"></i> -->
                    <!-- Informasi Pengguna -->
                </p>
            </div>
            <div class="card-body p-3">
                <div class="chart">
                    <!-- Ganti placeholder gambar dengan avatar atau gambar profil sesuai kebutuhan -->
                    <img src="path/to/your/user-image.jpg" alt="Gambar Sampah" class="img-fluid rounded-circle">
                </div>
                <div class="user-details mt-3">
                    <h5 class="font-weight-bold mb-0"></h5>
                    <p class="text-sm text-muted"></p>
                    <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                </div>
                <hr class="my-3">
                <p class="text-muted">
                    
                </p>
            </div>
        </div>
    </div>
</div>
<!-- 
<div class="row mt-4">
    <div class="col-lg-7 mb-lg-0 mb-4">
        <div class="card z-index-2 h-100">
            <div class="card-header pb-0 pt-3 bg-transparent">
                <h6 class="text-capitalize">Cara Mengolah Sampah</h6>
                <p class="text-sm mb-0">
                    <i class="fa fa-map-marker text-primary"></i>
                    Lihat Lokasi Pengguna
                </p>
            </div>
            <div class="card-body p-3">
                <div class="chart">
                    Ganti placeholder gambar dengan peta atau gambar lokasi sesuai kebutuhan
                    <img src="path/to/your/user-location-image.jpg" alt="User Location Map" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
