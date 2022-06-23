<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"><img src="{{ asset('img/staycation.png') }}" alt="" srcset="" width="147"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-3">
            <a class="nav-link {{ ($title === "Home") ? 'active' : ''}}" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link {{ ($title === "Cari Hotel") ? 'active' : ''}}" href="/cari-hotel">Cari Hotel</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link {{ ($title === "Cek Pesanan") ? 'active' : ''}}" href="#">Cek Pesanan</a>
          </li>
          <li class="nav-item me-3">
            <a class="nav-link {{ ($title === "About") ? 'active' : ''}}" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>