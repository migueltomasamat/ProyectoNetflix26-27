<div class="flex flex-col bg-surface-container-low rounded-xl shadow-xl overflow-hidden">
    <!-- Header with Tabs and New Title Action -->
    <div class="p-gutter flex flex-col lg:flex-row lg:items-center justify-between gap-gutter bg-surface-container">
        <div class="flex flex-col gap-1">
            <span class="font-headline-md text-headline-md text-on-surface font-bold">Gestión de Catálogo Multimedia</span>
            <span class="font-body-sm text-body-sm text-outline">Monitoreo de estado de publicación, métricas de ciclo de vida y edición de metadatos.</span>
        </div>
        <div class="flex flex-wrap items-center gap-space-sm">
            <!-- Filter Tabs -->
            <div class="flex items-center bg-surface-container-lowest p-1 rounded-lg">
                <button class="px-space-sm py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface font-semibold shadow-sm transition-colors"
                        id="tab-all" onclick="filterCatalog('all')">
                    Todos (14,820)
                </button>
                <button class="px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors"
                        id="tab-movies" onclick="filterCatalog('movies')">
                    Películas (6,240)
                </button>
                <button class="px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors"
                        id="tab-series" onclick="filterCatalog('series')">
                    Series (4,890)
                </button>
                <button class="px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors"
                        id="tab-games" onclick="filterCatalog('games')">
                    Videojuegos (420)
                </button>
            </div>
            <!-- Add Button -->
            <button class="flex items-center gap-space-xs bg-primary-container hover:bg-inverse-primary text-on-primary-container px-space-md py-2 rounded-lg font-label-md text-label-md transition-all shadow-md active:scale-95">
                <span class="material-symbols-outlined text-[18px]">add_box</span>
                <span>+ Registrar nuevo título / juego</span>
            </button>
        </div>
    </div>
    <!-- Table Component -->
    <div class="overflow-x-auto w-full">
        <table class="w-full text-left border-collapse">
            <thead>
            <tr class="bg-surface-container-high/60 text-outline font-label-sm text-label-sm uppercase tracking-wider">
                <th class="py-space-md px-gutter">Título y Portada</th>
                <th class="py-space-md px-space-md">Tipo / Formato</th>
                <th class="py-space-md px-space-md">Género</th>
                <th class="py-space-md px-space-md text-center">Clasificación</th>
                <th class="py-space-md px-space-md text-right">Visionado 30d</th>
                <th class="py-space-md px-space-md text-center">Estado</th>
                <th class="py-space-md px-gutter text-right">Acciones</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-transparent font-body-md text-body-md" id="catalog-table-body">
            <!-- Row 1: Series -->
            <tr class="hover:bg-surface-container transition-colors group" data-category="series">
                <td class="py-space-md px-gutter">
                    <div class="flex items-center gap-space-md">
                        <img class="w-16 h-10 object-cover rounded shadow-md group-hover:scale-105 transition-transform"
                             data-alt="Cyber Chronicles Neo-Tokyo cinematic horizontal poster art, glowing red and cyan holographic city skyscrapers, futuristic dark anime cyberpunk atmosphere, highly detailed high contrast."
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCWzoGEh6ZP7K4lsCqQlz8jGaOxJ4G-G-RrrtFHt6WMCMuHZtY5WvA8A4f6sP22b0048auLHVh951gU9Ez9DAji2O7cCDovXn12EaUccREfo9L0QETCO10RdF_E8UiPWKiSZMHrh_S-BCZuF1MrCX3bM9u8uvdL-wWX9yGh2Lj7CS6NbM_bXeiTIDj-5HGD2ZtN1ba50Hjyk1EhoWHGswUoJvftUBqsPOKK9LDChOil-EpYqZ4DVVf"/>
                        <div class="flex flex-col min-w-0">
                            <span class="font-label-md text-label-md text-on-surface font-bold truncate group-hover:text-primary transition-colors">Cyber Chronicles: Neo-Tokyo</span>
                            <span class="font-body-sm text-body-sm text-outline truncate">Temporada 2 • 8 Episodios • 4K HDR Atmos</span>
                        </div>
                    </div>
                </td>
                <td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-on-surface bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">tv</span> Serie Original
              </span>
                </td>
                <td class="py-space-md px-space-md text-on-surface">Ciencia Ficción / Anime</td>
                <td class="py-space-md px-space-md text-center">
                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface">16+</span>
                </td>
                <td class="py-space-md px-space-md text-right">
                    <div class="flex flex-col items-end">
                        <span class="font-label-md text-label-md text-on-surface font-bold">98.4M hrs</span>
                        <span class="font-badge-spec text-badge-spec text-secondary">+22% estreno</span>
                    </div>
                </td>
                <td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Publicado</span>
</span>
                </td>
                <td class="py-space-md px-gutter text-right">
                    <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Editar Metadatos">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Ver Analíticas">
                            <span class="material-symbols-outlined text-[18px]">insights</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors"
                                title="Desactivar">
                            <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- Row 2: Series -->
            <tr class="hover:bg-surface-container transition-colors group" data-category="series">
                <td class="py-space-md px-gutter">
                    <div class="flex items-center gap-space-md">
                        <img class="w-16 h-10 object-cover rounded shadow-md group-hover:scale-105 transition-transform"
                             data-alt="Stranger Mysteries Season 4 vintage 80s dark retro poster, eerie foggy forest with red storm clouds in the sky, moody nostalgic lighting."
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuBF9pFJY6ZyvcCBXf-q8gtXVHp_i-Ru8OeaTXJEIg8AMmgrm2n-o7BsGBsQvsN5nOgkEGLelnhdLQxXR3ysBxq_1JV8s8bZdCduT-sV4Yx30gEarIZILXF0A2H5ylKgS1FWVVXPnTfAUBWXOn3xM96ZD6V2C6hWYrd4cFqMZHREYUP9UmuFYQ1iDj1DqWLXFqDs1iMi3B5ehYRn2SY9u3ulurMpMgzHpP_CjRu1V48-UH3uaVMcNZ1B"/>
                        <div class="flex flex-col min-w-0">
                            <span class="font-label-md text-label-md text-on-surface font-bold truncate group-hover:text-primary transition-colors">Stranger Mysteries: Temporada 4</span>
                            <span class="font-body-sm text-body-sm text-outline truncate">Temporada Completa • 9 Episodios</span>
                        </div>
                    </div>
                </td>
                <td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-on-surface bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">tv</span> Serie
              </span>
                </td>
                <td class="py-space-md px-space-md text-on-surface">Misterio / Sobrenatural</td>
                <td class="py-space-md px-space-md text-center">
                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface">16+</span>
                </td>
                <td class="py-space-md px-space-md text-right">
                    <div class="flex flex-col items-end">
                        <span class="font-label-md text-label-md text-on-surface font-bold">84.1M hrs</span>
                        <span class="font-badge-spec text-badge-spec text-outline">Estable</span>
                    </div>
                </td>
                <td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Publicado</span>
</span>
                </td>
                <td class="py-space-md px-gutter text-right">
                    <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Editar Metadatos">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Ver Analíticas">
                            <span class="material-symbols-outlined text-[18px]">insights</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors"
                                title="Desactivar">
                            <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- Row 3: Movies -->
            <tr class="hover:bg-surface-container transition-colors group" data-category="movies">
                <td class="py-space-md px-gutter">
                    <div class="flex items-center gap-space-md">
                        <img class="w-16 h-10 object-cover rounded shadow-md group-hover:scale-105 transition-transform"
                             data-alt="Shadow of Mayfair dark Victorian London thriller film still, cobblestone street shrouded in mist with gas lamps casting golden amber reflection on wet ground, cinematic 4K look."
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuBmmYVFCXn13XOPpuL55jqkKyw4fjpZzSdJeyxBizglIjxWVabQA0qq4i5QY5rMEsDpvQTKWWhdoQ4OfgROv60phQaxTiXc_3M-Ma6x4rDwMLOR7kWbrvRPX6P41o-lx3LZs7xPz65pUHzTVZgj2UIgcMqu7lrKRlX1X9NwVN-0CspKGohNNeTC0liQhALfZkOh_FcFKBbomfYlOWf8IRMhSMvF_YAMDwvTqRcr3kmWlVoke0MEIGB8"/>
                        <div class="flex flex-col min-w-0">
                            <span class="font-label-md text-label-md text-on-surface font-bold truncate group-hover:text-primary transition-colors">Shadow of Mayfair</span>
                            <span class="font-body-sm text-body-sm text-outline truncate">2h 14m • Dolby Vision • 4K UHD</span>
                        </div>
                    </div>
                </td>
                <td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary-fixed bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">movie</span> Película
              </span>
                </td>
                <td class="py-space-md px-space-md text-on-surface">Thriller / Drama Histórico</td>
                <td class="py-space-md px-space-md text-center">
                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface">18+</span>
                </td>
                <td class="py-space-md px-space-md text-right">
                    <div class="flex flex-col items-end">
                        <span class="font-label-md text-label-md text-on-surface font-bold">62.3M hrs</span>
                        <span class="font-badge-spec text-badge-spec text-secondary">+15.4%</span>
                    </div>
                </td>
                <td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Publicado</span>
</span>
                </td>
                <td class="py-space-md px-gutter text-right">
                    <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Editar Metadatos">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Ver Analíticas">
                            <span class="material-symbols-outlined text-[18px]">insights</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors"
                                title="Desactivar">
                            <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- Row 4: Games -->
            <tr class="hover:bg-surface-container transition-colors group" data-category="games">
                <td class="py-space-md px-gutter">
                    <div class="flex items-center gap-space-md">
                        <img class="w-16 h-10 object-cover rounded shadow-md group-hover:scale-105 transition-transform"
                             data-alt="Hades Nether Realm isometric roguelike video game action artwork, burning underworld flames, hand-drawn comic Greek mythology styling, intense saturated orange and purple hues."
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuA02jPb-8H-FkFnZeAvH4LKCRNgA79mT-wZWQU0oqCeecG-Ch6jDYZXIcA04b4BFx28A5FJhM1TECI5YFXy4XGDp_hwnx8DCg9js90OUTDzA09kGBGLEdClXhcC7deQvp-tz3PQ6QetivsF7hIWL5RPwgwKNaqUiou6swTXZS2451G0NP730pXO3fc7oiAkSPBmD4mo2PiBYMI7ZuHb1-OtBFmPoFxWj35Qz64KJq255qH34PFjT96p"/>
                        <div class="flex flex-col min-w-0">
                            <span class="font-label-md text-label-md text-on-surface font-bold truncate group-hover:text-primary transition-colors">Hades: Nether Realm</span>
                            <span class="font-body-sm text-body-sm text-outline truncate">Netflix Cloud Gaming • Controller Support</span>
                        </div>
                    </div>
                </td>
                <td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-tertiary bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">sports_esports</span> Videojuego
              </span>
                </td>
                <td class="py-space-md px-space-md text-on-surface">Roguelike / Acción</td>
                <td class="py-space-md px-space-md text-center">
                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface">12+</span>
                </td>
                <td class="py-space-md px-space-md text-right">
                    <div class="flex flex-col items-end">
                        <span class="font-label-md text-label-md text-tertiary font-bold">4.2M sesiones</span>
                        <span class="font-badge-spec text-badge-spec text-outline">18.2M hrs jugadas</span>
                    </div>
                </td>
                <td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Publicado</span>
</span>
                </td>
                <td class="py-space-md px-gutter text-right">
                    <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Editar Metadatos">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Ver Analíticas">
                            <span class="material-symbols-outlined text-[18px]">insights</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors"
                                title="Desactivar">
                            <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- Row 5: Games -->
            <tr class="hover:bg-surface-container transition-colors group" data-category="games">
                <td class="py-space-md px-gutter">
                    <div class="flex items-center gap-space-md">
                        <img class="w-16 h-10 object-cover rounded shadow-md group-hover:scale-105 transition-transform"
                             data-alt="GTA San Andreas Definitive Edition open world video game scene, Los Santos palm trees with sunset orange sky and lowrider vehicle parked, stylized game screenshot."
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuASFxyx-dslXsfregNPtelOsaXVoFrv5AxWEaYWAu6hP26j6Sc4-LH3WaA6b-bxrDHj7MR4fvjzoejQwMPRziZrfR6sf27Ooe_Wxqk6tAVhNP6gu8RMS23ZtRk5YRwjOYtafnZUKAGlPvEyB_jQZ84U5t5b5HpJkRa5OLwCix8PK5wnDfWg0bEMjKAG25MJEollc6cbAbTwwiITQR_BfRHxO_jhXWV3q_OhN6EYGXZDB2BVKeVDzzoJ"/>
                        <div class="flex flex-col min-w-0">
                            <span class="font-label-md text-label-md text-on-surface font-bold truncate group-hover:text-primary transition-colors">GTA: San Andreas Definitive</span>
                            <span class="font-body-sm text-body-sm text-outline truncate">Mobile / Tablet • Rockstar Games</span>
                        </div>
                    </div>
                </td>
                <td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-tertiary bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">sports_esports</span> Videojuego
              </span>
                </td>
                <td class="py-space-md px-space-md text-on-surface">Mundo Abierto</td>
                <td class="py-space-md px-space-md text-center">
                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface">18+</span>
                </td>
                <td class="py-space-md px-space-md text-right">
                    <div class="flex flex-col items-end">
                        <span class="font-label-md text-label-md text-tertiary font-bold">7.8M sesiones</span>
                        <span class="font-badge-spec text-badge-spec text-secondary">+34% Móvil</span>
                    </div>
                </td>
                <td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Publicado</span>
</span>
                </td>
                <td class="py-space-md px-gutter text-right">
                    <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Editar Metadatos">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Ver Analíticas">
                            <span class="material-symbols-outlined text-[18px]">insights</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors"
                                title="Desactivar">
                            <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                        </button>
                    </div>
                </td>
            </tr>
            <!-- Row 6: Movies -->
            <tr class="hover:bg-surface-container transition-colors group" data-category="movies">
                <td class="py-space-md px-gutter">
                    <div class="flex items-center gap-space-md">
                        <img class="w-16 h-10 object-cover rounded shadow-md group-hover:scale-105 transition-transform"
                             data-alt="Ecos del Vacio deep space sci-fi movie key art, lone astronaut gazing into massive celestial cosmic anomaly vortex with deep crimson and obsidian dark matter."
                             src="https://lh3.googleusercontent.com/aida-public/AB6AXuCPvLjUA9rS1wiVMZM7VH90-J2LkZdQ4giXLXISMabTg8ENNB833y3rQxHZ711Wc4dH7M-B7EJoLGOrRD-6G7VocvreIHNbBYKnaDPzUQoi0updRD2cda_ylXOcysbrB_1hgnre3-9ISHUDi_EMIq2kl2b-trybu0Ascn08kAj3ox2bApxIosNZrYlv-EsMhUwThFqAG_LCVxR6V-5nL8sHvk4GL5RmX4YeD7nh2DpHpYAvTRjiBQqv"/>
                        <div class="flex flex-col min-w-0">
                            <span class="font-label-md text-label-md text-on-surface font-bold truncate group-hover:text-primary transition-colors">Ecos del Vacío</span>
                            <span class="font-body-sm text-body-sm text-outline truncate">1h 58m • IMAX Enhanced Audio</span>
                        </div>
                    </div>
                </td>
                <td class="py-space-md px-space-md">
<span class="inline-flex items-center gap-1 font-label-sm text-label-sm text-primary-fixed bg-surface-container-high px-2 py-0.5 rounded">
<span class="material-symbols-outlined text-[14px]">movie</span> Película
              </span>
                </td>
                <td class="py-space-md px-space-md text-on-surface">Ciencia Ficción / Espacio</td>
                <td class="py-space-md px-space-md text-center">
                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-highest text-on-surface">13+</span>
                </td>
                <td class="py-space-md px-space-md text-right">
                    <div class="flex flex-col items-end">
                        <span class="font-label-md text-label-md text-on-surface font-bold">45.9M hrs</span>
                        <span class="font-badge-spec text-badge-spec text-secondary">+8.7%</span>
                    </div>
                </td>
                <td class="py-space-md px-space-md text-center">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-label-sm text-label-sm">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span>
<span>Publicado</span>
</span>
                </td>
                <td class="py-space-md px-gutter text-right">
                    <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Editar Metadatos">
                            <span class="material-symbols-outlined text-[18px]">edit</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                title="Ver Analíticas">
                            <span class="material-symbols-outlined text-[18px]">insights</span>
                        </button>
                        <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors"
                                title="Desactivar">
                            <span class="material-symbols-outlined text-[18px]">pause_circle</span>
                        </button>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!-- Pagination & Items Count Controls -->
    <div class="p-gutter-sm bg-surface-container-high/40 flex flex-col sm:flex-row items-center justify-between gap-space-sm">
        <div class="flex items-center gap-space-md text-outline font-body-sm text-body-sm">
            <span>Mostrando <strong class="text-on-surface">1-6</strong> de 14,820 registros</span>
            <div class="flex items-center gap-1">
                <span>Filas por página:</span>
                <select class="bg-surface-container text-on-surface px-2 py-1 rounded outline-none cursor-pointer">
                    <option>10</option>
                    <option>25</option>
                    <option>50</option>
                </select>
            </div>
        </div>
        <div class="flex items-center gap-1">
            <button class="w-8 h-8 rounded flex items-center justify-center bg-surface-container text-outline hover:text-on-surface hover:bg-surface-container-highest transition-colors disabled:opacity-30"
                    disabled="">
                <span class="material-symbols-outlined text-[18px]">chevron_left</span>
            </button>
            <button class="w-8 h-8 rounded flex items-center justify-center bg-primary-container text-on-primary-container font-label-sm text-label-sm font-bold shadow-sm">
                1
            </button>
            <button class="w-8 h-8 rounded flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-highest font-label-sm text-label-sm transition-colors">
                2
            </button>
            <button class="w-8 h-8 rounded flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-highest font-label-sm text-label-sm transition-colors">
                3
            </button>
            <span class="px-1 text-outline font-body-sm text-body-sm">...</span>
            <button class="w-8 h-8 rounded flex items-center justify-center bg-surface-container text-on-surface hover:bg-surface-container-highest font-label-sm text-label-sm transition-colors">
                247
            </button>
            <button class="w-8 h-8 rounded flex items-center justify-center bg-surface-container text-outline hover:text-on-surface hover:bg-surface-container-highest transition-colors">
                <span class="material-symbols-outlined text-[18px]">chevron_right</span>
            </button>
        </div>
    </div>
</div>
