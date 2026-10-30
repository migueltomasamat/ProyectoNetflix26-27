<aside class="fixed left-0 top-0 h-full w-72 bg-surface-container-lowest z-50 flex flex-col justify-between overflow-y-auto">
    <div class="flex flex-col">
        <div class="h-16 px-gutter flex items-center gap-space-sm bg-surface-container-lowest/80 backdrop-blur-xl"><img
                alt="Netflix-style bold red monogram letter N icon with sharp cinematic ribbon gradient. Brand logo. - Primary color: #e50914
- Font: inter
- Mode: dark
- Roundness: rounded-sm
" class="h-8 w-auto object-contain"
                src="app/Views/backend/img/netflix-logo.png"/>
            <div class="flex flex-col"><span
                    class="font-label-md text-label-md text-on-surface tracking-tight uppercase">Netflix Studio</span><span
                    class="font-label-sm text-label-sm text-outline tracking-wider uppercase">Control Center</span>
            </div>
        </div>
        <nav class="px-gutter-sm py-space-sm flex flex-col gap-space-md"
             data-active-classes="bg-primary-container text-on-primary-container font-label-md rounded-lg">
            <div class="flex flex-col gap-space-xs"><span
                    class="px-space-sm font-label-sm text-label-sm text-outline uppercase tracking-wider">Contenido</span><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="catalogo-global" href="/movie/add"><span
                        class="material-symbols-outlined text-[18px]">grid_view</span><span>Nueva Película</span></a><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="peliculas" href="#"><span
                        class="material-symbols-outlined text-[18px]">movie</span><span>Películas</span></a><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="series-de-tv" href="#"><span
                        class="material-symbols-outlined text-[18px]">tv</span><span>Series de TV</span></a><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="videojuegos" href="#"><span
                        class="material-symbols-outlined text-[18px]">sports_esports</span><span>Videojuegos</span></a><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="estrenos-programados" href="#"><span class="material-symbols-outlined text-[18px]">schedule</span><span>Estrenos programados</span></a>
            </div>
            <div class="flex flex-col gap-space-xs"><span
                    class="px-space-sm font-label-sm text-label-sm text-outline uppercase tracking-wider">Gestión de Usuarios</span><a
                    aria-current="page"
                    class="flex items-center gap-space-sm px-space-sm py-space-xs transition-colors bg-primary-container text-on-primary-container font-label-md rounded-lg"
                    data-path="estadisticas-de-visionado" href="/user"><span class="material-symbols-outlined text-[18px]">insights</span><span>Gestión integral de usuarios</span></a>
            </div>
            <div class="flex flex-col gap-space-xs"><span
                    class="px-space-sm font-label-sm text-label-sm text-outline uppercase tracking-wider">Configuración</span><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="gestion-de-usuarios-del-cms" href="#"><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="parametros-del-servidor" href="#"><span
                        class="material-symbols-outlined text-[18px]">dns</span><span>Parámetros del servidor</span></a><a
                    class="flex items-center gap-space-sm px-space-sm py-space-xs rounded text-on-surface-variant hover:bg-surface-container hover:text-on-surface transition-colors font-label-md text-label-md"
                    data-path="logs-del-sistema" href="#"><span
                        class="material-symbols-outlined text-[18px]">terminal</span><span>Logs del sistema</span></a></div>
        </nav>
    </div>
    <div class="p-gutter-sm bg-surface-container-low m-space-sm rounded-lg flex items-center justify-between shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="flex items-center gap-space-sm">
            <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span
                    class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
            <div class="flex flex-col"><span
                    class="font-label-md text-label-md text-on-surface truncate"><?=$_SESSION['user']->getName()?></span><span
                    class="font-body-sm text-body-sm text-outline">Admin General</span></div>
        </div>
        <div class="flex items-center gap-space-xs bg-surface-container-highest px-space-xs py-[2px] rounded"><span
                class="w-1.5 h-1.5 rounded-full bg-secondary"></span><span
                class="font-badge-spec text-badge-spec text-secondary uppercase">Online</span></div>
    </div>
</aside>
