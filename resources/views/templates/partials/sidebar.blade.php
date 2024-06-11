<aside id="laptop-sidebar" class="navbar navbar-vertical navbar-expand-lg" data-bs-theme="auto">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#sidebar-menu" aria-controls="sidebar-menu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h1 id="raw-logo" class="navbar-brand navbar-brand-autodark">
      <a href=".">
        <img src="{{ ('/img/logo.png') }}" width="100px" alt="Logo Raw Herbal Tisane" id="raw-logo" class="navbar-brand">
      </a>
    </h1>
    <p align="center">Raw Herbal Tisane</p>
    <div class="collapse navbar-collapse" id="sidebar-menu">
      <ul class="navbar-nav pt-lg-3">
        <li>
          <a class="nav-link" href="/dashboard">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
              </svg>
            </span>
            <span class="nav-link-title">
              Home
            </span>
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                <path d="M12 12l8 -4.5"></path>
                <path d="M8.2 9.8l7.6 -4.6"></path>
                <path d="M12 12v9"></path>
                <path d="M12 12l-8 -4.5"></path>
              </svg>
            </span>
            <span class="nav-link-title">
              Stok Barang & Bahan
            </span>
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('bahan.index') }}">
              Stok Bahan-Bahan
            </a>
            <a class="dropdown-item" href="{{ route('aksesoris.index') }}">
              Stok Aksesoris
            </a>
          </div>
        </li>

        <!-- <li class="nav-item">
          <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSd5v-vLjHWuyWbvoKoNKKGGK7c_96UiKjZRPIt6aQJxI6lt5g/viewform">
            <span class="nav-link-icon d-md-none d-lg-inline-block">
              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-box-left-stretch" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"></path>
                <path d="M9 17h-2"></path>
                <path d="M13 12h-6"></path>
                <path d="M11 7h-4"></path>
              </svg>
            </span>
            <span class="nav-link-title">
              Absensi Karyawan
            </span>
          </a>
        </li> -->

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                  <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
              </span>
              <span class="nav-link-title">
                Profil Karyawan
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ ('/profile') }}">
                Pengaturan Akun
              </a>
              <a class="dropdown-item">
              <form method="POST" action="{{ route('logout') }}">
                            @csrf
                        <input type="submit" value="Logout" class="btn btn-transparant">
                </form>
</a>
            </div>
          </li>
      </ul>
    </div>
  </div>
</aside>

<nav id="mobile-sidebar" class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a href="#">
      <img src="{{ ('/img/logo.png') }}" width="50px">
      <h3 class="navbar-brand">Raw herbal Tisane</h3>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link" href="/dashboard">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                  <path d="M5 12l-2 0l9 -9l9 9l-2 0" />
                  <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" />
                  <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" />
                </svg>
              </span>
              <span class="nav-link-title">
                Home
              </span>
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-box-seam" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M12 3l8 4.5v9l-8 4.5l-8 -4.5v-9l8 -4.5"></path>
                  <path d="M12 12l8 -4.5"></path>
                  <path d="M8.2 9.8l7.6 -4.6"></path>
                  <path d="M12 12v9"></path>
                  <path d="M12 12l-8 -4.5"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Stok Barang & Bahan
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ route('bahan.index') }}">
                Stok Bahan-Bahan
              </a>
              <a class="dropdown-item" href="{{ route('aksesoris.index') }}">
                Stok Aksesoris
              </a>
            </div>
          </li>

          <!-- <li class="nav-item">
            <a class="nav-link" href="https://docs.google.com/forms/d/e/1FAIpQLSd5v-vLjHWuyWbvoKoNKKGGK7c_96UiKjZRPIt6aQJxI6lt5g/viewform">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-align-box-left-stretch" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                  <path d="M3 5a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v14a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-14z"></path>
                  <path d="M9 17h-2"></path>
                  <path d="M13 12h-6"></path>
                  <path d="M11 7h-4"></path>
                </svg>
              </span>
              <span class="nav-link-title">
                Absensi Karyawan
              </span>
            </a>
          </li> -->

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="false" role="button" aria-expanded="false">
              <span class="nav-link-icon d-md-none d-lg-inline-block">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-circle" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                  <path d="M12 10m-3 0a3 3 0 1 0 6 0a3 3 0 1 0 -6 0" />
                  <path d="M6.168 18.849a4 4 0 0 1 3.832 -2.849h4a4 4 0 0 1 3.834 2.855" />
                </svg>
              </span>
              <span class="nav-link-title">
                Profil Karyawan
              </span>
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="{{ ('profile') }}">
                Pengaturan Akun
              </a>
            
              <form method="POST" action="{{ route('logout') }}" class="dropdown-item">
                @csrf
                  <input type="submit" value="Logout" class="btn btn-transparant">

              </form>
              

            </div>
          </li>

      </div>
    </div>
  </div>
</nav>

<script>
  function checkWindowSize() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    // Ganti nilai "768" sesuai dengan batas lebar layar yang Anda inginkan untuk beralih antara laptop dan hp
    if (width >= 768) {
      // Tampilkan sidebar untuk laptop
      document.getElementById("laptop-sidebar").style.display = "block";
      document.getElementById("mobile-sidebar").style.display = "none";
    } else {
      // Tampilkan sidebar untuk hp
      document.getElementById("laptop-sidebar").style.display = "none";
      document.getElementById("mobile-sidebar").style.display = "block";
    }

  }

  function adjustMargin() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;

    if (width < 768) {
      document.getElementById("mobile-sidebar").style.marginLeft = "0";
    } else {
      document.getElementById("mobile-sidebar").style.marginBottom = "-100%";
    }
  }

  window.onload = adjustMargin;
  window.onresize = adjustMargin;

  // Panggil fungsi saat halaman dimuat
  window.onload = checkWindowSize;

  // Panggil fungsi saat ukuran layar berubah
  window.onresize = checkWindowSize;
</script>

<style>
  @import url('https://rsms.me/inter/inter.css');

  :root {
    --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
  }

  body {
    font-feature-settings: "cv03", "cv04", "cv11";
  }

  #raw-logo.navbar-brand {
    padding: 0;
  }

  #mobile-sidebar {
    display: none;
    /* Sembunyikan sidebar untuk mobile secara default pada laptop */
  }

  @media (max-width: 767px) {
    #mobile-sidebar {
      margin-bottom: -100%;
      /* Sembunyikan sidebar untuk laptop pada layar mobile */
    }

    #laptop-sidebar {
      display: block;
      /* Tampilkan sidebar untuk mobile pada layar mobile */
    }
  }
</style>