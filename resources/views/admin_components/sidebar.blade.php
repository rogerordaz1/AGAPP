<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="mt-3 pb-3 mb-3 d-flex">

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <div class="dropdown">
                <div class="info">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Usuario:
                        {{ Auth::user()->name }}</a>

                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();this.closest('form').submit();">Cerrar Session</a>

                        </li>

                    </ul>

                </div>

        </form>




    </div>


</div>


<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item menu-close">
            <a href="#" class="nav-link">
                <i class="mr-2 fas fa-solid fa-clipboard"></i>
                <p>
                    Ajustes de Cuenta
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="user/profile" class="nav-link active">

                        <i class="fas fa-solid fa-address-card"></i>
                        <p>Perfil de Usuario</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-key"></i>
                        <p>Recuperar Contrasena</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">


                <i class="nav-icon fas fa-landmark"></i>
                <p>
                    O.Comerciales lista
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                {{-- <i class="nav-icon fas fa-th"></i> --}}

                <i class="nav-icon fas fa-user-tag"></i>

                <p>
                    Agentes
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>
                    Clientes
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
            </a>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                    Roles
                    {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
            </a>
        </li>
    </ul>
</nav>
<!-- /.sidebar-menu -->
</div>
