<header class="navbar navbar-expand-lg navbar-dark shadow-sm sticky-top" style="background-color:#0d4f2f; min-height:70px;">
    <div class="container-fluid">

        <!-- Logo -->
        <a class="navbar-brand fw-bold" href="#">
            <i class="fas fa-home me-2" style="color: #39A900;"></i>
            Sistema de Gestión SENA
        </a>
        <!-- Botón móvil -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#headerAdminContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="headerAdminContent">
            <!-- Menú escritorio -->
            <ul class="navbar-nav mx-auto d-none d-lg-flex">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('area.create') }}">
                        <i class="fas fa-layer-group"></i> Áreas
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('computers.index') }}">
                        <i class="fas fa-desktop"></i> Computadores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('training-centers.index') }}">
                        <i class="fas fa-building"></i> Centros
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('courses.index') }}">
                        <i class="fas fa-book"></i> Cursos
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('teachers.index') }}">
                        <i class="fas fa-chalkboard-user"></i> Instructores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('apprentices.index') }}">
                        <i class="fas fa-user-graduate"></i> Aprendices
                    </a>
                </li>

            </ul>

            <!-- Menú móvil -->
            <ul class="navbar-nav d-lg-none">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                        <i class="fas fa-bars"></i> Navegación del Panel
                    </a>

                    <ul class="dropdown-menu">

                        <li><a class="dropdown-item" href="{{ route('area.create') }}">Áreas</a></li>

                        <li><a class="dropdown-item" href="{{ route('computers.index') }}">Computadores</a></li>

                        <li><a class="dropdown-item" href="{{ route('training-centers.index') }}">Centros</a></li>

                        <li><a class="dropdown-item" href="{{ route('courses.index') }}">Cursos</a></li>

                        <li><a class="dropdown-item" href="{{ route('teachers.index') }}">Instructores</a></li>

                        <li><a class="dropdown-item" href="{{ route('apprentices.index') }}">Aprendices</a></li>

                    </ul>
                </li>

            </ul>

            <!-- Perfil -->
            <ul class="navbar-nav ms-auto">

                <li class="nav-item me-3 d-flex align-items-center">
                    <span class="badge p-2" style="background-color: #39A900;">
                        <i class="fas fa-user-shield"></i> Administrador
                    </span>
                </li>

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" data-bs-toggle="dropdown">

                        <div class="rounded-circle bg-white text-dark fw-bold d-flex justify-content-center align-items-center me-2" style="width:35px;height:35px;">
                            AD
                        </div>

                        Admin Regional

                    </a>

                    <ul class="dropdown-menu dropdown-menu-end">

                        <li><a class="dropdown-item" href="#"><i class="fas fa-user me-2"></i>Mi Perfil</a></li>

                        <li><a class="dropdown-item" href="#"><i class="fas fa-cog me-2"></i>Ajustes</a></li>

                        <li><hr class="dropdown-divider"></li>

                        <li>
                            <a class="dropdown-item text-danger" href="#">
                                <i class="fas fa-sign-out-alt me-2"></i>Cerrar sesión
                            </a>
                        </li>

                    </ul>

                </li>

            </ul>

        </div>

    </div>
</header>