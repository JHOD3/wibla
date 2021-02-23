{{--<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="" class="brand-link">
        <img src="https://infyom.com/images/logo/blue_logo_150x150.jpg"
             alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light">{{ config('app.name') }}</span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>--}}
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('products.index') }}" class="brand-link">
        <img src="https://ui-avatars.com/api/?name=Wibla&amp;rounded=true&amp;background=a0a0a0&amp;color=ffffff" alt="Wibla Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Wibla!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="https://ui-avatars.com/api/?name={{Auth::user()->name}}&amp;rounded=true&amp;background=a0a0a0&amp;color=ffffff" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('products.index') }}" class="d-block">
                    @if (Auth::guest())
                        <p>Wibla</p>
                    @else
                        <p>{{ Auth::user()->name}}</p>
                    @endif
                </a>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
</aside>
