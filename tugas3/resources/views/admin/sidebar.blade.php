 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="beranda">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Ria Shop <sup></sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item">
    <a class="nav-link" href="{{url('beranda')}}">
        <i class="fas fa-fw fa-home"></i>
        <span>Beranda</span></a>
</li>
<!-- Nav Item - Produk -->
<li class="nav-item">
    <a class="nav-link" href="{{url('produk')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>Produk</span></a>
</li>

<!-- Nav Item - Kategori -->
<li class="nav-item">
    <a class="nav-link" href="{{url('kategori')}}">
        <i class="fas fa-fw fa-table"></i>
        <span>User</span></a>
</li>



<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true"
        aria-controls="collapsePages">
        <i class="fas fa-fw fa-wrench"></i>
        <span>Pengaturan</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login">Login</a>
            <a class="collapse-item" href="register">Register</a>
            <a class="collapse-item" href="forgot">Forgot Password</a>
        </div>
    </div>
</li>


<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>