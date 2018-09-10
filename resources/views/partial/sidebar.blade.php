<aside class="main-sidebar sidebar-dark-success elevation-4">
  <a href="index3.html" class="brand-link">
      <img src="{{ asset('icon.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><font color = "green">SiReToLab</font></span>
    </a>

  <div class="sidebar" data-color="purple" data-image="{{ asset('sidebar-5.jpg')}}">
      <!-- Sidebar user panel (optional) -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-users"></i>
              <p>
                {{ Auth::user()->name }}
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                 </form>
              </li>
            </ul>
            </li>
          </ul>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Tables
                <i class="fa fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              @role('member')
               <li class="nav-item">
                <a href="daftar" class="nav-link">
                  <i class="fa fa-pie-chart"></i>
                  <p>Lihat Barang Pinjaman</p>
                </a>
              </li>
              @endrole
              <li class="nav-item">
                <a href="{{route('barang.index')}}" class="nav-link">
                  <i class="fa fa-pie-chart"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('peminjaman.index') }}" class="nav-link">
                  <i class="fa fa-pie-chart"></i>
                  <p>Peminjam</p>
                </a>
             </li>
             @role('admin')
                <li class="nav-item">
                <a href="{{ route('user.index') }}" class="nav-link">
                  <i class="fa fa-pie-chart"></i>
                  <p>Member</p>
                </a>
             </li>
               @endrole
                @role('admin')
              <li class="nav-item">
                <a href="{{ route('pengembalian.index') }}" class="nav-link">
                  <i class="fa fa-pie-chart"></i>
                  <p>Pengembalian</p>
                </a>
             </li>
              @endrole
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon fa fa-calendar"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-circle-o text-info"></i>
              <p>Informational</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
