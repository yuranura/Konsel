<aside class="main-sidebar sidebar-white-primary elevation-4">
<!-- Sidebar -->
<div class="sidebar">
    <a href="/dashboard" class="brand-link">
        <img src="/dashboard/img/logo-konsel.png" alt="Konsel Logo" height="50">
      </a>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
             @if (Auth::user()->hasRole('admin')) 
        <li class="nav-item menu-open">
          <a href="/dashboard" class="nav-link bg-danger">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="/user" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
              Pengguna
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="/psikolog" class="nav-link">
              <i class="nav-icon fas fa-heart"></i>
              <p>
                Psikolog
              </p>
            </a>
          </li>
        <li class="nav-item">
            <a href="/soal" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Soal
              </p>
            </a>
        </li>
        @elseif (Auth::user()->role == 3) 
          <li class="nav-item">
            <a href="/tes" class="nav-link">
              <i class="nav-icon fas fa-stopwatch"></i>
              <p>
                Tes
              </p>
            </a>
        </li> 
        @endif
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</aside>
