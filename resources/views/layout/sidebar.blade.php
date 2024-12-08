<!-- Sidebar -->
<div class="sidebar" data-background-color="white">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="white">
            <a href="index.html" class="logo">
                <img src="assets/img/kaiadmin/logo_light.pn" alt="navbar brand" class="navbar-brand" height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
            <button class="topbar-toggler more">
                <i class="gg-more-vertical-alt"></i>
            </button>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                <li class="nav-item {{ request()->routeIs('customer*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#customer" class="collapsed" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        <p>Customers</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('customer*') ? 'show' : '' }}" id="customer">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('customer.create') }}">
                                    <span class="sub-item"> Add New Customer</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item {{ request()->routeIs('order*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#order" class="collapsed" aria-expanded="false">
                        <i class="fas fa-luggage-cart"></i>
                        <p>Orders</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('order*') ? 'show' : '' }}" id="order">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('order.index') }}">
                                    <span class="sub-item"> All Orders</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('order.create') }}">
                                    <span class="sub-item"> Add New Order</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item {{ request()->routeIs('invoice*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#invoice" class="collapsed" aria-expanded="false">
                        <i class="far fa-check-circle"></i>
                        <p>Invoices</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ request()->routeIs('invoice*') ? 'show' : '' }}" id="invoice">
                        <ul class="nav nav-collapse">
                            <li>
                                <a href="{{ route('invoice.create') }}">
                                    <span class="sub-item"> Add New invoice</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section text-center"> <a href="{{ route('logout') }}">
                            <span class="sub-item"> logout</span>
                        </a></h4>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
