    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('home') }}">
          <div class="sidebar-brand-text mx-3">
              Opentrip </div>  
                  
        </a>
        
  
  
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Interface Dashboard
        </div>
        
        {{-- Dashboard --}}
        <li class="nav-item {{ Request::is('admin/dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.dashboard') }}">
              <i class="fas fa-fw fa-tachometer-alt"></i>
              <span>Analytics</span></a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
          Travel
        </div>
        
        {{-- paket travel --}}
        <li class="nav-item {{ Request::is('admin/dashboard/travel-package*') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('admin.travel-package.index') }}">
              <i class="fas fa-fw fa-luggage-cart"></i>
              <span>Travel Package</span></a>
        </li>
                 
                
        <!-- Divider -->
        <hr class="sidebar-divider">
  
        <!-- Heading -->
        <div class="sidebar-heading">
          Galery
        </div>
        
        {{-- galeri travel --}}
        <li class="nav-item {{ Request::is('admin/dashboard/gallery*') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('admin.gallery.index') }}">
              <i class="fas fa-fw fa-images"></i>
              <span>Galleries Travel</span></a>
        </li>

         <!-- Divider -->
         <hr class="sidebar-divider">
  
         <!-- Heading -->
         <div class="sidebar-heading">
           Transaction
         </div>
         
         {{-- Transaksi --}}
         <li class="nav-item {{ Request::is('admin/dashboard/transaction*') ? 'active' : '' }}">
             <a class="nav-link" href="{{ route('admin.transaction.index') }}">
               <i class="fas fa-fw fa-dollar-sign"></i>
               <span>Transactions</span></a>
         </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        {{-- Transaksi --}}
         <li class="nav-item {{ Request::is('admin/dashboard/data-customers') ? 'active' : '' }}">
             <a class="nav-link" href="{{ route('admin.customers') }}">
               <i class="fas fa-users"></i>
               <span>Data Customers</span></a>
         </li>

         <!-- Divider -->
        <hr class="sidebar-divider">

        {{-- Transaksi --}}
         <li class="nav-item {{ Request::is('admin/dashboard/report-periodic') ? 'active' : '' }}">
             <a class="nav-link" href="{{ route('admin.report-periodic') }}">
               <i class="fas fa-file-alt"></i>
               <span>Report</span></a>
         </li>

        <!-- Divider -->
        <hr class="sidebar-divider">
 
  
        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
  
      </ul>
      <!-- End of Sidebar -->