<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">UNSULBAR</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index-dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      @if (Auth::user()->role == "dosen")
          
      
      <!-- Heading -->
      <li class="nav-item active">
       <a class="btn btn-primary"  href="{{route('index-lecturer')}}" >
          <i class="fas fa-users"></i>
          <span>Dosen</span></a>
      </li>
      @endif
      <li class="nav-item active">
       <a class="btn btn-primary"  href="{{route('index-student')}}" >
          <i class="fas fa-users"></i>
          <span>Mahasiswa</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>