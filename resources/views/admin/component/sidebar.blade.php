<!-- Sidebar -->
<div class="sidebar" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="#" class="logo">
                <img src="kaiadmin/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ $page === 'dashboard' ? 'active' : '' }}">
                    <a href="/admin">
                        <i class="fa-solid fa-table-columns"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-section">
                    <h4 class="text-section">Reservasi</h4>
                </li>
                <li class="nav-item {{ $page === 'orders' ? 'active' : '' }}">
                    <a href="/admin-orders">
                        <i class="fa-solid fa-address-card"></i>
                        <p>Pesanan</p>
                    </a>
                </li>
                <li class="nav-section">
                    <h4 class="text-section">Layanan</h4>
                </li>
                <li class="nav-item {{ $page === 'destinations' ? 'active' : '' }}">
                    <a href="/admin-destinations">
                        <i class="fa-solid fa-person-hiking"></i>
                        <p>Destinasi Wisata</p>
                    </a>
                </li>
                <li class="nav-item {{ $page === 'packages' ? 'active' : '' }}">
                    <a href="/admin-packages">
                        <i class="fa-solid fa-list"></i>
                        <p>Paket Wisata</p>
                    </a>
                </li>
                <li class="nav-item {{ $page === 'homestays' ? 'active' : '' }}">
                    <a href="/admin-homestays">
                        <i class="fa-solid fa-house-chimney"></i>
                        <p>Homestay</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
