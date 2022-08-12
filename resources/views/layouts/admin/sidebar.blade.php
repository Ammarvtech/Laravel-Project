<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
            <a class="nav-link" href="{{ url('/dashboard') }}">
                <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
                <span class="menu-title">Companies</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('viewCompanies') }}">View Companies</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('addCompanies') }}">Add Companies</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                <span class="menu-title">Employees</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{ url('viewEmployee') }}">View Employees</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('addEmployee') }}">Add Employees</a></li>
                </ul>
            </div>
        </li>

        <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
                <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                    <span class="menu-title">Log Out</span></a>
            </div>
        </li>
    </ul>
</nav>
