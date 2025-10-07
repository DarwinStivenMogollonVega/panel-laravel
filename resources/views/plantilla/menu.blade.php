<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
    <!--begin::Sidebar Brand-->
    <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="../index.html" class="brand-link">
            <!--begin::Brand Image-->
<<<<<<< HEAD
<<<<<<< HEAD
            <img src="{{asset('img/AdminLTELogo.png')}}" alt="AdminLTELogo"
=======
            <img src="{{asset('assets/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
                class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Sistema</span>
<<<<<<< HEAD
=======
            <img src="{{asset('assets/img/AdminLTELogo.png')}}" title="Logo" alt="Logo panel"
                class="brand-image opacity-75 shadow" />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Panel de Control</span>
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
    </div>
    <!--end::Sidebar Brand-->
    <!--begin::Sidebar Wrapper-->
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <!--begin::Sidebar Menu-->
<<<<<<< HEAD
<<<<<<< HEAD
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link" id="menuDashboard">
                        <i class="nav-icon bi-speedometer"></i>
                        <p>
                            Panel de Control
                        </p>
                    </a>
                </li>
                @canany(['user-list', 'role-list'])
                <li class="nav-item" id="menuSeguridad">
=======
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('dashboard')}}" class="nav-link" id="mnuDashboard">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                @canany(['user-list', 'rol-list'])
                <li class="nav-item" id="mnuSeguridad">
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Seguridad
<<<<<<< HEAD
=======
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                aria-label="Main navigation" data-accordion="false" id="navigation">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
<<<<<<< HEAD
                            Dashboard
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
                            Seguridad
>>>>>>> dba1577 (Se agrego la migracion de activo a users, se agrego paguinacion, y se eliminaron las rutas iniciales de prueba.)
=======
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
                        @can('user-list')
                        <li class="nav-item">
                            <a href="{{route('usuarios.index')}}" class="nav-link" id="itemUsuario">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        @endcan
                        @can('rol-list')
                        <li class="nav-item">
                            <a href="{{route('roles.index')}}" class="nav-link" id="itemRole">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        @endcan
                    </ul>
                </li>
<<<<<<< HEAD
                @endcanany            
=======
                        <li class="nav-item">
                            <a href="{{route('usuario.index')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../index2.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v2</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="../index3.html" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Dashboard v3</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="../generate/theme.html" class="nav-link">
                        <i class="nav-icon bi bi-palette"></i>
                        <p>Theme Generate</p>
                    </a>
                </li>
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
                @endcanany
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
    </div>
    <!--end::Sidebar Wrapper-->
<<<<<<< HEAD
<<<<<<< HEAD
</aside>
=======
</aside>
>>>>>>> 3658b96 (Primer version del proyecto: Usuario, delete.)
=======
 <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
     <!--begin::Sidebar Brand-->
     <div class="sidebar-brand">
         <!--begin::Brand Link-->
         <a href="../index.html" class="brand-link">
             <!--begin::Brand Image-->
             <img src="{{ asset('assets/img/AdminLTELogo.png') }}" title="Logo" alt="Logo panel"
                 class="brand-image opacity-75 shadow" />
             <!--end::Brand Image-->
             <!--begin::Brand Text-->
             <span class="brand-text fw-light">Panel de Control</span>
             <!--end::Brand Text-->
         </a>
         <!--end::Brand Link-->
     </div>
     <!--end::Sidebar Brand-->
     <!--begin::Sidebar Wrapper-->
     <div class="sidebar-wrapper">
         <nav class="mt-2">
             <!--begin::Sidebar Menu-->
             <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="navigation"
                 aria-label="Main navigation" data-accordion="false" id="navigation">
                 <li class="nav-item" id="menuSeguridad">
                     <a href="#" class="nav-link">
                         <i class="nav-icon bi bi-speedometer"></i>
                         <p>
                             Seguridad
                             <i class="nav-arrow bi bi-chevron-right"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="{{ route('usuarios.index') }}" class="nav-link" id="itemUsuario">
                                 <i class="nav-icon bi bi-circle"></i>
                                 <p>Usuarios</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="{{ route('roles.index') }}" class="nav-link" id="itemRole">
                                 <i class="nav-icon bi bi-circle"></i>
                                 <p>Roles</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="../index3.html" class="nav-link">
                                 <i class="nav-icon bi bi-circle"></i>
                                 <p>Dashboard v3</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="{{route('dashboard')}}" class="nav-link">
                         <i class="nav-icon bi bi-palette"></i>
                         <p>Theme Generate</p>
                     </a>
                 </li>
             </ul>
             <!--end::Sidebar Menu-->
         </nav>
     </div>
     <!--end::Sidebar Wrapper-->
 </aside>
>>>>>>> 3f907fb (Se actualizo el proyecto para estar al dia)
=======
</aside>
>>>>>>> edc20ff (Se agregaron roles al index de usaurio, le dimos permisos de can a admin y cliente y ahroa cliente no puede ver seguridad)
