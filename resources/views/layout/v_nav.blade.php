<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="/">
        <img src="{{asset('template')}}/assets/img/logo-ct-dark.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">TPS Kota Malang</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="/home">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="/tips">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              
            </div>
            <span class="nav-link-text ms-1">Informasi TPS</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link " href="/sampah"> -->
          <a class="nav-link " href="/sampah">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-basket text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Informasi Sampah</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link " href="/sampah"> -->
          <a class="nav-link " href="/tps">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-basket text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Data TPS</span>
          </a>
        </li>
        <li class="nav-item">
          <!-- <a class="nav-link " href="/sampah"> -->
          <a class="nav-link " href="/keluh_kesah">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-basket text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Keluh Kesah</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0">Dashboard</h6>
        </nav>    
      <!-- Display the dynamically updated list below the search input -->
      <div id="searchResults" class="mt-3">
          <!-- The matched items will be displayed here -->
      </div>
      
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-xl-none ps-1 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-4" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              <i class="sidenav-toggler-line bg-white"></i>
              </div>
              </a>
              </li>
            @guest
                <li class="nav-item d-flex align-items-center">
                    <a href="{{ route('login') }}" class="nav-link text-white font-weight-bold px-0">
                        <i class="fa fa-user me-sm-1"></i>
                        <span class="d-sm-inline d-none">Sign In</span>
                    </a>
                </li>
            @else
                <li class="nav-item dropdown d-flex align-items-center">
                    <a class="nav-link dropdown-toggle text-white font-weight-bold px-0" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user me-sm-1">Selamat Datang </i>
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if (Auth::user()->role === 'admin')
                            <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
                        @endif
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                            <i class="sidenav-toggler-line bg-white"></i>
                        </div>
                    </a>
                </li>
            @endguest
        </ul>
        
        </div>
      </div>
    </nav>

<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


<script>
  $(document).ready(function () {
      var searchInput = $('#searchInput');
      var searchResults = $('#searchResults');

      searchInput.on('input', function () {
          var searchValue = $(this).val().toLowerCase();

          // Lakukan permintaan Ajax untuk mengambil hasil pencarian
          $.ajax({
              url: '/search', // Gantilah dengan endpoint server Anda untuk pencarian
              method: 'GET',
              data: { search: searchValue },
              success: function (data) {
                  updateSearchResults(data);
              },
              error: function (error) {
                  console.error('Error fetching search results:', error);
              }
          });
      });

      function updateSearchResults(results) {
          // Hapus hasil sebelumnya
          searchResults.empty();

          // Tampilkan hasil baru dalam dropdown
          if (results.length > 0) {
              var resultList = $('<ul class="list-group"></ul>');

              results.forEach(function (result) {
                  var listItem = $('<li class="list-group-item">' + result.name + '</li>');
                  resultList.append(listItem);
              });

              searchResults.append(resultList);
              searchResults.show();
          } else {
              searchResults.hide();
          }
      }

      // Tutup dropdown saat mengklik di luar
      $(document).on('click', function (event) {
          if (!$(event.target).closest('#searchResults').length && !$(event.target).is('#searchInput')) {
              searchResults.hide();
          }
      });
  });
</script>
 

<script>
 // Get the input element and attach an input event listener
$('#searchInput').on('input', function () {
    // Get the value entered by the user
    var searchValue = $(this).val().toLowerCase();

    // Perform AJAX request to fetch data dynamically (replace URL with your actual endpoint)
    $.ajax({
        url: '/your-search-endpoint', // Ganti dengan endpoint pencarian Anda
        method: 'GET',
        data: { query: searchValue },
        success: function (data) {
            // Process the data and build the dropdown list HTML
            var dropdownHTML = data.map(function (item) {
                return '<div class="dropdown-item">' + item + '</div>';
            }).join('');

            // Display the dropdown list
            $('#searchResults').html(dropdownHTML);
        },
        error: function (error) {
            console.error('Error fetching data:', error);
        }
    });
});


</script>


    <!-- End Navbar -->