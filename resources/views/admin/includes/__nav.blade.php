<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <!-- <i class="fas fa-laugh-wink"></i> -->
          <img src="{{ asset('admin/assets/img/Logo.png') }}"
                width="30rem">
        </div>
        <div class="sidebar-brand-text mx-3">eMandi</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!--  Divider -->
       <hr class="sidebar-divider"> 

      <!-- Heading -->
     <!--  <div class="sidebar-heading">
        Interface
      </div> -->

      <!-- Nav Item - Customers -->
      <li class="nav-item">
        
          <a class="nav-link" href="{{ route('customers.index') }}">
         <!--  <i class="fas fa-fw fa-cog"></i> -->
          <i class="fas fa-fw fa-user"></i>
          <span>Customers</span>
        </a>
      
      </li>

      <!-- Nav Item - Suppliers -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('suppliers.index') }}">
          <i class="fas fa-fw fa-address-card"></i>
          <span>Suppliers</span>
        </a>
        <!-- <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div> -->
      </li>
      <!-- Nav Item - Product-->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('products.index') }}">
          <i class="fas fa-fw fa-apple-alt"></i>
          <span>Products</span>
        </a>
       <!--  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div> -->
      </li>

      <!-- Nav Item - Purchase -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('purchase.index') }}">
         <i class="fas fa-fw fa-shopping-basket"></i>       
          <span>Purchase</span></a>
      </li>

      <!-- Nav Item - Sales -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('sales.index') }}">
          <i class="fas fa-fw fa-calculator"></i>
          <span>Sales</span></a>
      </li>

     <!--  <Nav Item  -  Record> -->
       <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-book"></i>
          <span>Record</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>