@extends('layout.v_template')
@section('content')
<div class="row">
    <div class="col-xl-3 col-sm-6">
    </div>
    <div class="row mt-4">
        <div class="col-lg-7 mb-lg-0 mb-4">
            <div class="card z-index-2 h-100">
                <div class="card-header pb-0 pt-3 bg-transparent">
                    <h6 class="text-capitalize">Lokasi TPS Terdekat Dari Anda!</h6>
                    <div class="dropdown">
  <a href="#" class="btn bg-gradient-secondary dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2"> Keterangan Warna
  </a>
  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
      <li>
          <a class="dropdown-item" href="#">
            <img src="https://i.ibb.co/hsNjTQj/merah.png"/> Untuk TPS Besar
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="#">
            <img src="https://i.ibb.co/894pSkK/hijau.png" /> Untuk TPS Sedang
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="#">
            <img src="https://i.ibb.co/Fs3fm7y/kuning.png" /> Untuk TPS Kecil
          </a>
      </li>
      <li>
          <a class="dropdown-item" href="#">
            <img src="https://i.ibb.co/Dkq3L5S/abu.png" /> Untuk TPS Liar
          </a>
      </li>
  </ul>
</div>
                </div>
                <div class="card-body p-3">
                    <div class="chart">
                        {{-- Coba Lokasi --}}
                        <!-- Gunakan komponen Livewire di sini -->
                        @livewire('map-location')
                        @livewireScripts
                        <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
                        @stack('scripts')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-lg-5">
@endsection
