<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>Buku</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('dashboard.admin.buku')}}">
              <i class="bi bi-circle"></i><span>Daftar Buku</span>
            </a>
          </li>
          <li>
            <a href="{{route('dashboard.admin.buku.tambahbuku')}}">
              <i class="bi bi-circle"></i><span>Tambah Buku</span>
            </a>
          </li>
    </ul>

  </aside><!-- End Sidebar-->