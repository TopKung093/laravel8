    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="#">Buttons</a>
            <a class="collapse-item" href="#">Cards</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/product') }}">
          <i class="fa fa-home"></i> หน้าหลัก
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/order-product') }}">
          <i class="fa fa-shopping-cart"></i> ตะกร้าของฉัน
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ url('/order') }}">
          <i class="fa fa-box"></i> คำสั่งซื้อของฉัน
        </a>
      </li>
    </ul>
    <!-- End of Sidebar -->