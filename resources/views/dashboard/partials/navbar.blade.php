<div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="/dashboard/img/logo-konsel.png" alt="KonselLogo">
</div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-danger navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars text-white"></i></a>
      </li>
      </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Logouts Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link text-white" data-toggle="dropdown" href="#">
          Halo, {{ Auth::user()->name }} <i class="fas fa-caret-down text-white ml-2"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
          <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
            <i class="fas fa-door-open float-right"></i>
                                    {{ __('Logout') }}
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </div>
      </li>
    </ul>
  </nav>
