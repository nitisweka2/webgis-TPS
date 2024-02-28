<!-- resources/views/keluh_kesah.blade.php -->

@extends('layout.v_template')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Keluh Kesah Warga</div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('keluh_kesah.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="subjek" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subjek" name="subjek" required>
                        </div>

                        <div class="mb-3">
                            <label for="pesan" class="form-label">Keluhan / Kesah</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="4" required></textarea>
                            @error('pesan')
                                <div class="text-danger">{{ 'Pesan Terlalu Banyak, Maksimal 255 Karakter' }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Kirim Keluhan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
