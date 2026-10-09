<div class="sidebar-brand">
    <a href="{{ route('home') }}" class="sidebar-logo" aria-label="SenaGestión, inicio">
        <img src="{{ asset('imagenes/1image.png') }}" alt="Logo SENA">
        <span>SenaGestión</span>
    </a>
</div>

<nav class="sidebar-navigation" aria-label="Navegación principal">
    <p class="sidebar-section-title">Principal</p>
    <a class="sidebar-link {{ request()->is('/') || request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}" title="Inicio">
        <i class="fas fa-house"></i><span>Inicio</span>
    </a>

    <p class="sidebar-section-title">Formación</p>
    <a class="sidebar-link {{ request()->routeIs('area.*') ? 'active' : '' }}" href="{{ route('area.create') }}" title="Áreas">
        <i class="fas fa-layer-group"></i><span>Áreas</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('computer.*', 'computers.*') ? 'active' : '' }}" href="{{ route('computers.index') }}" title="Computadores">
        <i class="fas fa-desktop"></i><span>Computadores</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('training-center.*', 'training-centers.*') ? 'active' : '' }}" href="{{ route('training-centers.index') }}" title="Centros">
        <i class="fas fa-building"></i><span>Centros</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('course.*', 'courses.*') ? 'active' : '' }}" href="{{ route('courses.index') }}" title="Cursos">
        <i class="fas fa-book"></i><span>Cursos</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('teacher.*', 'teachers.*') ? 'active' : '' }}" href="{{ route('teachers.index') }}" title="Instructores">
        <i class="fas fa-chalkboard-user"></i><span>Instructores</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('apprentice.*', 'apprentices.*') ? 'active' : '' }}" href="{{ route('apprentices.index') }}" title="Aprendices">
        <i class="fas fa-user-graduate"></i><span>Aprendices</span>
    </a>

    <p class="sidebar-section-title">Comunidad</p>
    <a class="sidebar-link {{ request()->routeIs('notifications.*') ? 'active' : '' }}" href="{{ route('notifications.index') }}" title="Notificaciones">
        <i class="fas fa-bell"></i><span>Notificaciones</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('news.*') ? 'active' : '' }}" href="{{ route('news.index') }}" title="Noticias">
        <i class="fas fa-newspaper"></i><span>Noticias</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('offers.*') ? 'active' : '' }}" href="{{ route('offers.index') }}" title="Ofertas">
        <i class="fas fa-briefcase"></i><span>Ofertas</span>
    </a>
    <a class="sidebar-link {{ request()->routeIs('login.*') ? 'active' : '' }}" href="{{ route('login.index') }}" title="Administrador">
        <i class="fas fa-user-shield"></i><span>Administrador</span>
    </a>
</nav>

<div class="sidebar-footer">
    <button type="button" class="role-btn" onclick="openRoleModal()">
        <i class="fas fa-user-tag"></i><span>Cambiar rol</span>
    </button>
</div>
