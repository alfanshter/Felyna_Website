<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('dashboard'); ?>">
        <div class="sidebar-brand-text mx-3">Admin Felyna</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('admin'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Fitur
    </div>

    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/insert'); ?>">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Insert Produk</span>
        </a>
    </li>

    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
<!-- Sidebar -->