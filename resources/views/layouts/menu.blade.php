<!-- need to remove -->
@can('haveaccess', 'roles.index')
    <li class="{{ Request::is('roles*') ? 'menu-open' : '' }} nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
                Roles
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('haveaccess', 'roles.create')
                <li class="nav-item {{ Request::is('roles.create') ? 'active' : '' }}">
                    <a href="{{ route('roles.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Añadir Rol</p>
                    </a>
                </li>
            @endcan
            <li class="nav-item {{ Request::is('roles.index') ? 'active' : '' }}">
                <a href="{{ route('roles.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Roles</p>
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('haveaccess', 'permissions.index')
    <li class="{{ Request::is('permissions*') ? 'menu-open' : '' }} nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-universal-access"></i>
            <p>
                Permisos
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('haveaccess', 'permissions.create')
                <li class="nav-item {{ Request::is('permissions.create') ? 'active' : '' }}">
                    <a href="{{ route('permissions.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Añadir Permisos</p>
                    </a>
                </li>
            @endcan
            <li class="nav-item {{ Request::is('permissions.index') ? 'active' : '' }}">
                <a href="{{ route('permissions.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Permisos</p>
                </a>
            </li>

        </ul>
    </li>
@endcan
@can('haveaccess', 'users.index')
    <li class="{{ Request::is('users*') ? 'menu-open' : '' }} nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-user"></i>
            <p>
                Usuarios
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('haveaccess', 'users.create')
                <li class="nav-item {{ Request::is('users.create') ? 'active' : '' }}">
                    <a href="{{ route('users.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Añadir usuario</p>
                    </a>
                </li>
            @endcan
            <li class="nav-item {{ Request::is('users.index') ? 'active' : '' }}">
                <a href="{{ route('users.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Usuarios</p>
                </a>
            </li>

        </ul>
    </li>
@endcan
@can('haveaccess', 'categories.index')
    <li class="{{ Request::is('categories*') ? 'menu-open' : '' }} nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-network-wired"></i>
            <p>
                Categorias
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('haveaccess', 'categories.create')
                <li class="nav-item {{ Request::is('categories.create') ? 'active' : '' }}">
                    <a href="{{ route('categories.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Añadir categoria</p>
                    </a>
                </li>
            @endcan
            <li class="nav-item {{ Request::is('categories.index') ? 'active' : '' }}">
                <a href="{{ route('categories.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Categorias</p>
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('haveaccess', 'marks.index')
    <li class="{{ Request::is('marks*') ? 'menu-open' : '' }} nav-item has-treeview">
        <a href="#" class="nav-link">
            <i class="nav-icon fas fa-thumbtack"></i>
            <p>
                Marcas
                <i class="fas fa-angle-left right"></i>
            </p>
        </a>
        <ul class="nav nav-treeview">
            @can('haveaccess', 'marks.create')
                <li class="nav-item {{ Request::is('marks.create') ? 'active' : '' }}">
                    <a href="{{ route('marks.create') }}" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Añadir marca</p>
                    </a>
                </li>
            @endcan
            <li class="nav-item {{ Request::is('marks.index') ? 'active' : '' }}">
                <a href="{{ route('marks.index') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Marcas</p>
                </a>
            </li>
        </ul>
    </li>
@endcan

@can('haveaccess', 'products.index')
<li class="{{ Request::is('products*') ? 'active' : '' }} nav-item has-treeview">
    <a href="#" class="nav-link">
        <i class="nav-icon fab fa-product-hunt"></i>
        <p>
            Productos
            <i class="fas fa-angle-left right"></i>
        </p>
    </a>
    <ul class="nav nav-treeview">
        @can('haveaccess', 'products.create')
            <li class="nav-item {{ Request::is('postulates.create') ? 'active' : '' }}">
                <a href="{{ route('products.create') }}" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Añadir Productos</p>
                </a>
            </li>
        @endcan
        <li class="nav-item {{ Request::is('products.index') ? 'active' : '' }}">
            <a href="{{ route('products.index') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Productos</p>
            </a>
        </li>
    </ul>
</li>
@endcan
