<nav class="navbar navbar-expand-lg" style="background-color: #ffb6d9;">
    <div class="container-fluid">

        <a class="navbar-brand fw-bold text-white" href="#" style="font-size: 22px;">
            🌸 MyPinkApp
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">

            <!-- Left -->
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white fw-semibold" href="#register">Register</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link text-white" href="#user">Users</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('tanah.index') }}">Tanah</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('bangunan.index') }}">Bangunan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('ruangan.index') }}">Ruangan</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('kategori.index') }}">Kategori</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('barang.index') }}">Barang</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
