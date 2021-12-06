<!-- Navbar -->
<nav class="main-header navbar navbar-expand" style="background-color: #151A1B;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color: white">
                <i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item">
            <a class="nav-link color-white" href="#">
                @yield('title')
            </a>
        </li>
    </ul>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        {{-- <li class="nav-item">
            <a class="nav-link color-white" href="{{ route('user.password') }}"><i class="fa fa-lock"></i>
                Password</a>
        </li> --}}

        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link color-white" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Sair
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>

    </ul>
</nav>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar elevation-4 sidebar-light-indigo">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <img src="{{ asset('assets/logos/logo-sem-fundo.jpg') }}" alt="" class="brand-image" style="opacity: .8">
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav navbar-default nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="{{ route('admin.index') }}"
                        class="nav-link {{ $activePage == 'admin.index' ? ' active' : '' }}">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                @foreach ($marcas as $item)
                <li class="nav-item has-treeview">
                    <a href="{{ route('marca.slug', ['slug'=>$item->slug]) }}"
                        class="nav-link {{ $activePage == 'marca.slug' ? ' active' : '' }}">
                        <i class="nav-icon fa fa-angle-right"></i>
                        <p>
                            {{$item->name}}
                        </p>
                    </a>
                </li>
                @endforeach

                <li class="nav-item has-treeview">
                    <a href="{{ route('logout') }}" class="nav-link color-white" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt"></i> Sair
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>