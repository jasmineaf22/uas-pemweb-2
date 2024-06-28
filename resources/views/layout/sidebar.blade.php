  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://ft.unsoed.ac.id/" class="brand-link">
      <img src="{{ asset('template/') }}/img/unsoed.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">PerpusFT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="white" class="bi bi-person-circle " viewBox="0 0 16 16" >
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
          </svg></div>
        <div class="info">
          <a href="#" class="d-block">halo @auth{{ Auth::user()->name }}@endauth</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
                <a href="/table" class="nav-link">
                <i class="nav-icon fas fa-book"></i>
                  <p>Daftar Buku</p>
                </a>
          </li> 
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                  <a href="/kategori" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Daftar Kategori</p>
                  </a>
            </li> 
          </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                    <a href="/add-kategori" class="nav-link">
                    <i class="nav-icon fas fa-edit"></i>
                      <p>Tambah Kategori</p>
                    </a>
              </li> 
            </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
                <a href="/form" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                  <p>Tambah Buku</p>
                </a>
          </li> 
        </ul>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
                  <a href="/pinjam" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                    <p>Pinjam Buku</p>
                  </a>
            </li> 
          </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
                    <a href="/list" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                      <p>Daftar Pinjam</p>
                    </a>
              </li> 
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>