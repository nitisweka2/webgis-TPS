@extends('layout.v_template')

@section('content')
@php
    // Static content array (replace this with your actual data)
    $staticContent = [
        [
            'title' => 'Cari Lokasi TPS Lain?',
            'content' => "Jika terjadi masalah TPS sampah penuh disarankan klik link berikut : <a href='/cari-lokasi'>Lihat Map</a> <br>Jika ingin melihat rute dan ritase truk angkut sampah: <a href='/lihat-rute'>Lihat Rute</a>",
            'details' => "Additional details about the first post. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.",
        ],
        [
            'title' => new \Illuminate\Support\HtmlString("<p class='text-center'> <h3>Manajemen Sampah?</p>"),

            'content' => 'Manajemen sampah adalah proses pengelolaan sampah yang dilakukan dengan tujuan untuk
mengurangi timbulan sampah, mengurangi pencemaran lingkungan, dan mengubah sampah menjadi
bahan yang bermanfaat.
Di Kota Malang, pengelolaan sampah didasarkan pada konsep 3R, yaitu reduce (mengurangi), reuse
(menggunakan ulang), dan recycle (mendaur ulang). <p class="lead">Langkah-langkah dalam Pengelolaan Sampah di Kota Malang:</p>

<ol>
    <li>
        <strong>Pemberdayaan Masyarakat:</strong>
        Menerapkan pengelolaan sampah melalui konsep 3R berbasis pemberdayaan masyarakat. Tujuannya adalah untuk menumbuhkan dan mengelola Tempat Pembuangan Sampah (TPS) dengan memanfaatkan teknologi tepat guna dan ramah lingkungan.
    </li>

    <li>
        <strong>Pengurangan Sampah dari Sumbernya:</strong>
        Melakukan upaya untuk menurunkan jumlah timbulan sampah. Fokusnya adalah meningkatkan kesadaran masyarakat tentang pentingnya pengurangan sampah dan meningkatkan jumlah sampah yang dapat didaur ulang.
    </li>

    <li>
        <strong>Penerapan TPS 3R:</strong>
        Pembangunan Tempat Pengolahan Sampah Reduce, Reuse, and Recycle (TPS 3R) sudah berhasil mencapai 98,02% penanganan sampah di Kota Malang. Melalui konsep 3R dan partisipasi aktif masyarakat, pengelolaan sampah bertujuan untuk mengurangi timbulan sampah, meminimalkan dampak negatif terhadap lingkungan, dan meningkatkan pemanfaatan kembali serta daur ulang bahan.
    </li>
</ol>',
            'details' => "Additional details about the second post. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
        ],
        // Add more content items as needed
    ];

    // Number of items per page
    $itemsPerPage = 1;

    // Current page from the query string, default to 1 if not set
    $currentPage = request('page', 1);

    // Calculate the offset
    $offset = ($currentPage - 1) * $itemsPerPage;

    // Slice the array to get the items for the current page
    $currentPageContent = array_slice($staticContent, $offset, $itemsPerPage);
@endphp

@foreach($currentPageContent as $post)
    <div class="card card-blog card-plain">
        <div class="position-relative">
            <a class="d-block blur-shadow-image">
                <img src="https://www.customtruck.com/wp-content/uploads/2020/06/shutterstock_1265319334-scaled.jpg" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg">

            </a>
        </div>
        <div class="card-body px-0 pt-4">
            <p class="text-gradient text-primary text-gradient font-weight-bold text-sm text-uppercase"></p>
            <a href="javascript:;">
                <h4>{{ $post['title'] }}</h4>
            </a>
            <p>{!! $post['content'] !!}</p>
            
            <div class="collapse" id="details{{ $loop->index }}">
                <p>{{ $post['details'] }}</p>
            </div>
        </div>
    </div>
@endforeach

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item{{ $currentPage == 1 ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $currentPage > 1 ? '?page=' . ($currentPage - 1) : 'javascript:;' }}" tabindex="-1">
                <i class="fa fa-angle-left"></i>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        @for ($i = 1; $i <= ceil(count($staticContent) / $itemsPerPage); $i++)
            <li class="page-item{{ $i == $currentPage ? ' active' : '' }}"><a class="page-link" href="?page={{ $i }}">{{ $i }}</a></li>
        @endfor
        <li class="page-item{{ $currentPage == ceil(count($staticContent) / $itemsPerPage) ? ' disabled' : '' }}">
            <a class="page-link" href="{{ $currentPage < ceil(count($staticContent) / $itemsPerPage) ? '?page=' . ($currentPage + 1) : 'javascript:;' }}">
                <i class="fa fa-angle-right"></i>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>


@endsection