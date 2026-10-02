<?php

include_once "app/Views/backend/new_template/backend.head.php";
include_once "app/Views/backend/new_template/backend.aside.php";
include_once "app/Views/backend/new_template/backend.header.php";
?>
    <main class="relative pt-16 w-full px-margin-tablet bg-background min-h-screen">
        <div class="flex flex-col w-full pb-space-2xl">
            <!-- Header / Breadcrumbs & Action Bar -->
            <div class="flex flex-col gap-space-md py-space-lg mb-space-md">
                <div class="flex flex-wrap items-center justify-between gap-gutter">
                    <div class="flex flex-col gap-space-xs">
                        <nav class="flex items-center gap-space-xs font-label-sm text-label-sm text-outline">
                            <span class="hover:text-on-surface cursor-pointer">CMS Console</span>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <span class="hover:text-on-surface cursor-pointer">Gestión de Catálogo</span>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <span class="hover:text-on-surface cursor-pointer">Películas</span>
                            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
                            <span class="text-primary-container font-label-md">Dar de alta nueva película</span>
                        </nav>
                        <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">Dar de Alta Nueva
                            Película</h1>
                        <p class="font-body-md text-body-md text-outline max-w-3xl">
                            Configuración de metadatos cinematográficos, especificaciones técnicas, archivos de vídeo
                            máster, carátulas y fechas de lanzamiento global.
                        </p>
                    </div>
                    <div class="flex items-center gap-space-sm self-start lg:self-center">
                        <button class="flex items-center gap-space-xs px-gutter-sm py-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high text-on-surface font-label-md text-label-md transition-colors shadow-sm"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">save</span>
                            <span>Guardar borrador</span>
                        </button>
                        <button class="flex items-center gap-space-xs px-gutter-sm py-space-sm rounded-lg bg-surface-container-high hover:bg-surface-bright text-on-surface font-label-md text-label-md transition-colors shadow-sm"
                                onclick="scrollToPreview()" type="button">
                            <span class="material-symbols-outlined text-[18px]">visibility</span>
                            <span>Vista previa</span>
                        </button>
                        <button class="flex items-center gap-space-xs px-gutter py-space-sm rounded-lg bg-primary-container hover:bg-inverse-primary text-on-primary-container font-label-md text-label-md transition-all shadow-md active:scale-95"
                                type="button">
                            <span class="material-symbols-outlined text-[18px]">check_circle</span>
                            <span>Publicar película en catálogo</span>
                        </button>
                    </div>
                </div>
                <!-- Quick Status Strip -->
                <div class="flex flex-wrap items-center justify-between gap-gutter p-space-sm bg-surface-container-lowest rounded-lg">
                    <div class="flex items-center gap-gutter text-on-surface-variant font-label-sm text-label-sm">
<span class="flex items-center gap-space-xs">
<span class="w-2 h-2 rounded-full bg-secondary animate-pulse"></span>
          Ingesta en CDN activa: Nodo Madrid-ESP-01
        </span>
                        <span class="text-outline">|</span>
                        <span>ID Asignado: <span class="font-mono text-on-surface font-bold">NFX-81920482</span></span>
                        <span class="text-outline">|</span>
                        <span>DRM: <span class="text-secondary">Widevine L1 &amp; FairPlay v4.2 Habilitado</span></span>
                    </div>
                    <div class="flex items-center gap-space-xs text-outline font-label-sm text-label-sm">
                        <span class="material-symbols-outlined text-[16px] text-tertiary">history</span>
                        <span>Última sincronización automática hace 2 minutos</span>
                    </div>
                </div>
            </div>
            <!-- Main Grid: 65% Form / 35% Sticky Live Preview -->
            <div class="grid grid-cols-1 xl:grid-cols-12 gap-gutter-lg items-start">
                <!-- LEFT COLUMN: Form Modular Sections (8 cols = ~66.6%) -->
                <div class="xl:col-span-12 flex flex-col gap-space-lg">
                    <!-- Section 1: Información Básica y Sinopsis -->
                    <section
                            class="bg-surface-container-low rounded-xl p-gutter-lg flex flex-col gap-space-md shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-8 h-8 rounded-lg bg-primary-container/20 text-primary-container flex items-center justify-center font-bold font-label-md text-label-md">01</span>
                                <div class="flex flex-col">
                                    <h2 class="font-headline-md text-headline-md text-on-surface">Información Básica y
                                        Sinopsis</h2>
                                    <span class="font-body-sm text-body-sm text-outline">Identidad del largometraje para clientes globales y fichas editoriales</span>
                                </div>
                            </div>
                            <span class="font-badge-spec text-badge-spec px-space-xs py-0.5 rounded bg-surface-container-highest text-secondary uppercase tracking-wider">Metadatos Core</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-space-xs">
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Título original de la
                                    película *</label>
                                <input class="bg-surface-container text-on-surface placeholder:text-outline font-body-md text-body-md px-gutter-sm py-space-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors"
                                       id="inputOriginalTitle"
                                       placeholder="Ej. Extraction II, Society of the Snow" type="text"/>
                                <span class="font-body-sm text-body-sm text-outline">Nombre del corte del director oficial</span>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Título localizado (España /
                                    LatAm) *</label>
                                <input class="bg-surface-container text-on-surface placeholder:text-outline font-body-md text-body-md px-gutter-sm py-space-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors"
                                       id="inputLocalizedTitle"
                                       placeholder="Título traducido oficial" type="text"/>
                                <span class="font-body-sm text-body-sm text-outline">Visible en apps hispanohablantes</span>
                            </div>
                        </div>
                        <!-- Sinopsis Breve -->
                        <div class="flex flex-col gap-space-xs mt-space-xs">
                            <div class="flex items-center justify-between">
                                <label class="font-label-sm text-label-sm text-on-surface">Sinopsis editorial breve
                                    (Billboard y Mobile) *</label>
                                <span class="font-body-sm text-body-sm text-outline" id="charCount">188 / 250</span>
                            </div>
                            <textarea
                                    class="bg-surface-container text-on-surface placeholder:text-outline font-body-md text-body-md p-gutter-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors resize-none"
                                    id="inputShortSynopsis" maxlength="250"
                                    rows="3"></textarea>
                            <span class="font-body-sm text-body-sm text-outline">Texto de enganche directo que aparece bajo el título en la página principal.</span>
                        </div>
                        <!-- Sinopsis Extendida -->
                        <div class="flex flex-col gap-space-xs mt-space-xs">
                            <label class="font-label-sm text-label-sm text-on-surface">Sinopsis extendida para ficha
                                técnica completa</label>
                            <textarea
                                    class="bg-surface-container text-on-surface placeholder:text-outline font-body-md text-body-md p-gutter-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors"
                                    placeholder="Argumento completo para prensas, fichas de catálogo profundo y paneles de accesibilidad auditiva..."
                                    rows="4"></textarea>
                        </div>
                        <!-- Metadatos de Producción -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-space-md mt-space-xs">
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Año de estreno *</label>
                                <input class="bg-surface-container text-on-surface placeholder:text-outline font-body-md text-body-md px-gutter-sm py-space-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors"
                                       id="inputReleaseYear"  type="number" />
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Duración (H y Min) *</label>
                                <input class="bg-surface-container text-on-surface placeholder:text-outline font-body-md text-body-md px-gutter-sm py-space-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors"
                                       id="inputRuntime" placeholder="Ej. 1h 54m"
                                       type="text" />
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Idioma de doblaje
                                    principal</label>
                                <select class="bg-surface-container text-on-surface font-body-md text-body-md px-gutter-sm py-space-sm rounded-lg outline-none focus:bg-surface-container-high transition-colors cursor-pointer">
                                    <option value="es-ES">Español (Castellano)</option>
                                    <option value="en-US">Inglés (Original)</option>
                                    <option value="es-MX">Español (Latinoamérica)</option>
                                    <option value="fr-FR">Francés</option>
                                    <option value="de-DE">Alemán</option>
                                </select>
                            </div>
                        </div>
                    </section>
                    <!-- Section 2: Clasificación, Géneros y Reparto -->
                    <section
                            class="bg-surface-container-low rounded-xl p-gutter-lg flex flex-col gap-space-md shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-8 h-8 rounded-lg bg-primary-container/20 text-primary-container flex items-center justify-center font-bold font-label-md text-label-md">02</span>
                                <div class="flex flex-col">
                                    <h2 class="font-headline-md text-headline-md text-on-surface">Clasificación, Géneros
                                        y Reparto</h2>
                                    <span class="font-body-sm text-body-sm text-outline">Etiquetado algorítmico de recomendaciones y audiencia objetiva</span>
                                </div>
                            </div>
                            <span class="font-badge-spec text-badge-spec px-space-xs py-0.5 rounded bg-surface-container-highest text-tertiary uppercase tracking-wider">Curation Hub</span>
                        </div>
                        <!-- Géneros -->
                        <div class="flex flex-col gap-space-xs">
                            <label class="font-label-sm text-label-sm text-on-surface">Géneros cinematográficos
                                (Selección múltiple)</label>
                            <div class="flex flex-wrap gap-space-xs mt-space-xs" id="genreContainer">
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Ciencia ficción
                                </button>
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Acción distópica
                                </button>
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-primary-container text-on-primary-container font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Suspense psicológico
                                </button>
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-surface-container text-outline hover:text-on-surface font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Thriller espacial
                                </button>
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-surface-container text-outline hover:text-on-surface font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Drama
                                </button>
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-surface-container text-outline hover:text-on-surface font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Aventura épica
                                </button>
                                <button class="genre-pill px-gutter-sm py-1 rounded bg-surface-container text-outline hover:text-on-surface font-label-sm text-label-sm transition-all active:scale-95"
                                        onclick="toggleBadge(this)" type="button">Terror cósmico
                                </button>
                            </div>
                        </div>
                        <!-- Clasificación por Edades -->
                        <div class="flex flex-col gap-space-xs mt-space-xs">
                            <label class="font-label-sm text-label-sm text-on-surface">Clasificación por edades
                                (Certificación ICAA / global)</label>
                            <div class="grid grid-cols-2 sm:grid-cols-5 gap-space-sm mt-space-xs">
                                <div class="age-card p-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high cursor-pointer flex flex-col items-center justify-center gap-1 transition-all"
                                     onclick="selectAgeRating('TP', this)">
                                    <span class="font-headline-md text-headline-md text-on-surface font-black">TP</span>
                                    <span class="font-badge-spec text-badge-spec text-outline">Para todos</span>
                                </div>
                                <div class="age-card p-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high cursor-pointer flex flex-col items-center justify-center gap-1 transition-all"
                                     onclick="selectAgeRating('+7', this)">
                                    <span class="font-headline-md text-headline-md text-on-surface font-black">+7</span>
                                    <span class="font-badge-spec text-badge-spec text-outline">Infantil</span>
                                </div>
                                <div class="age-card p-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high cursor-pointer flex flex-col items-center justify-center gap-1 transition-all"
                                     onclick="selectAgeRating('+12', this)">
                                    <span class="font-headline-md text-headline-md text-on-surface font-black">+12</span>
                                    <span class="font-badge-spec text-badge-spec text-outline">Leve tensión</span>
                                </div>
                                <div class="age-card p-space-sm rounded-lg bg-primary-container text-on-primary-container cursor-pointer flex flex-col items-center justify-center gap-1 transition-all shadow-sm"
                                     onclick="selectAgeRating('+16', this)">
                                    <span class="font-headline-md text-headline-md font-black">+16</span>
                                    <span class="font-badge-spec text-badge-spec opacity-90">Violencia / Miedo</span>
                                </div>
                                <div class="age-card p-space-sm rounded-lg bg-surface-container hover:bg-surface-container-high cursor-pointer flex flex-col items-center justify-center gap-1 transition-all"
                                     onclick="selectAgeRating('+18', this)">
                                    <span class="font-headline-md text-headline-md text-on-surface font-black">+18</span>
                                    <span class="font-badge-spec text-badge-spec text-outline">Adultos</span>
                                </div>
                            </div>

                        </div>
                        <!-- Dirección y Reparto -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md mt-space-xs">
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Dirección de la
                                    película</label>
                                <div class="flex flex-wrap items-center gap-space-xs p-space-xs bg-surface-container rounded-lg min-h-[44px]">

                                    <input class="bg-transparent text-on-surface placeholder:text-outline font-body-sm text-body-sm px-1 py-0.5 outline-none flex-1 min-w-[70px]"
                                           placeholder="Director/Directora de la película" type="text"/>
                                </div>
                            </div>
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface">Protagonista</label>
                                <div class="flex flex-wrap items-center gap-space-xs p-space-xs bg-surface-container rounded-lg min-h-[44px]">

                                    <input class="bg-transparent text-on-surface placeholder:text-outline font-body-sm text-body-sm px-1 py-0.5 outline-none flex-1 min-w-[60px]"
                                           placeholder="Actor/actriz principal" type="text"/>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section 3: Especificaciones Técnicas y Formatos -->
                    <section
                            class="bg-surface-container-low rounded-xl p-gutter-lg flex flex-col gap-space-md shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-8 h-8 rounded-lg bg-primary-container/20 text-primary-container flex items-center justify-center font-bold font-label-md text-label-md">03</span>
                                <div class="flex flex-col">
                                    <h2 class="font-headline-md text-headline-md text-on-surface">Especificaciones
                                        Técnicas y Formatos</h2>
                                    <span class="font-body-sm text-body-sm text-outline">Parámetros de codificación para Smart TVs, consolas y dispositivos móviles</span>
                                </div>
                            </div>
                            <span class="font-badge-spec text-badge-spec px-space-xs py-0.5 rounded bg-surface-container-highest text-secondary uppercase tracking-wider">A/V Master</span>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-space-md">
                            <!-- Video Masters -->
                            <div class="flex flex-col gap-space-xs p-space-sm rounded-lg bg-surface-container">
<span class="font-label-sm text-label-sm text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">videocam</span>
              Resolución y Rango Dinámico
            </span>
                                <div class="flex flex-col gap-1.5 mt-1">
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">4K Ultra HD (2160p)</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" type="checkbox"/>
                                    </label>
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">Dolby Vision (Perfil 8.1)</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" type="checkbox"/>
                                    </label>
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">HDR10+ / Rec. 2020</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" type="checkbox"/>
                                    </label>
                                </div>
                            </div>
                            <!-- Audio Masters -->
                            <div class="flex flex-col gap-space-xs p-space-sm rounded-lg bg-surface-container">
<span class="font-label-sm text-label-sm text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-tertiary">volume_up</span>
              Formatos de Audio y Mezcla
            </span>
                                <div class="flex flex-col gap-1.5 mt-1">
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">Dolby Atmos (JOC bitstream)</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" type="checkbox"/>
                                    </label>
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">Surround 5.1 / 7.1 LPCM</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" type="checkbox"/>
                                    </label>
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">Audio Espacial de Netflix</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" type="checkbox"/>
                                    </label>
                                </div>
                            </div>
                            <!-- Aspect Ratio & Framing -->
                            <div class="flex flex-col gap-space-xs p-space-sm rounded-lg bg-surface-container">
<span class="font-label-sm text-label-sm text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">aspect_ratio</span>
              Relación de Aspecto
            </span>
                                <div class="flex flex-col gap-1.5 mt-1">
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">2.39:1 Panavision Scope</span>
                                        <input checked="" class="accent-primary-container w-4 h-4" name="aspectRatio"
                                               type="radio"/>
                                    </label>
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">16:9 DCI Nativo (1.78:1)</span>
                                        <input class="accent-primary-container w-4 h-4" name="aspectRatio"
                                               type="radio"/>
                                    </label>
                                    <label class="flex items-center justify-between p-space-xs rounded bg-surface-container-high cursor-pointer">
                                        <span class="font-label-sm text-label-sm text-on-surface">IMAX Enhanced Variable</span>
                                        <input class="accent-primary-container w-4 h-4" name="aspectRatio"
                                               type="radio"/>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Section 4: Carga de Assets Multimedia (Dropzones & Masters) -->
                    <section
                            class="bg-surface-container-low rounded-xl p-gutter-lg flex flex-col gap-space-md shadow-sm">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-space-sm">
                                <span class="w-8 h-8 rounded-lg bg-primary-container/20 text-primary-container flex items-center justify-center font-bold font-label-md text-label-md">04</span>
                                <div class="flex flex-col">
                                    <h2 class="font-headline-md text-headline-md text-on-surface">Carga de Assets
                                        Multimedia &amp; Masters</h2>
                                    <span class="font-body-sm text-body-sm text-outline">Archivos ProRes HQ, pósters oficiales de alta densidad y pistas de audio</span>
                                </div>
                            </div>
                            <span class="font-badge-spec text-badge-spec px-space-xs py-0.5 rounded bg-surface-container-highest text-secondary uppercase tracking-wider">Storage S3 Ready</span>
                        </div>
                        <!-- Master Video File Ingest Box -->
                        <div class="p-gutter-sm rounded-lg bg-surface-container flex flex-col gap-space-xs">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center gap-space-sm">
                                    <span class="material-symbols-outlined text-[24px] text-primary-container">cloud_upload</span>
                                    <div class="flex flex-col">
                                        <span class="font-label-md text-label-md text-on-surface">Vídeo Master ProRes 422 HQ (3840x2160 23.98fps)</span>
                                        <span class="font-body-sm text-body-sm text-outline">Chronicles_Red_Horizon_Master_DCI_HDR_v3.mov</span>
                                    </div>
                                </div>
                                <div class="flex items-center gap-space-sm">
                                    <span class="font-label-md text-label-md text-secondary">94% completado</span>
                                    <span class="material-symbols-outlined text-[18px] text-secondary">sync</span>
                                </div>
                            </div>
                            <!-- Progress bar -->
                            <div class="w-full bg-surface-container-high h-2 rounded-full overflow-hidden mt-1">
                                <div class="bg-primary-container h-full rounded-full transition-all duration-500"
                                     style="width: 94%;"></div>
                            </div>
                            <div class="flex items-center justify-between font-body-sm text-body-sm text-outline">
                                <span>24.0 GB / 25.5 GB transferidos - CDN Edge Transcoding en curso</span>
                                <span>Tiempo restante estimado: 1m 12s</span>
                            </div>
                        </div>
                        <!-- Dropzones for Artwork (Horizontal & Vertical) -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <!-- Carátula Horizontal (16:9) Hero/Billboard -->
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface flex items-center justify-between">
                                    <span>Carátula Horizontal (Hero 16:9) *</span>
                                    <span class="font-badge-spec text-badge-spec text-outline">3840 x 2160 px</span>
                                </label>
                                <div class="relative group rounded-lg overflow-hidden bg-surface-container aspect-video flex flex-col items-center justify-center p-gutter-sm cursor-pointer shadow-inner">
                                    <img class="absolute inset-0 w-full h-full object-cover opacity-60 group-hover:scale-105 transition-transform duration-500"
                                         data-alt="A dark and cinematic sci-fi movie still, showing a deep obsidian spaceship cockpit overlooking a massive crimson burning nebula with glowing red volumetric backlighting, photorealistic 8k render."
                                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvfBnUmvDOVPCF4T8eCjuH0ri3KqAtVi1knyB6pplahaljk42Ywn6WaYCvlfp3RmxhwqRTbwbCIje-O74ij5rFj1Fys5ecW67ltNPxnTo88OkV5aqtQrktCzwYbPuhsi99Sfa-sCl85UYJSgFbQ2-IF6iZHTNPTCjuAUe6lKquBILh1kc1_-EzcjCHDDYuuRd2IGxWuh6rDjlwAXaUF134kDQzCagHDffrEVLebF5aeqS8KtWEJbfU"/>
                                    <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/90 via-surface-container-lowest/30 to-transparent"></div>
                                    <div class="relative z-10 flex flex-col items-center text-center gap-1">
<span class="w-10 h-10 rounded-full bg-surface/80 backdrop-blur-md flex items-center justify-center text-on-surface shadow-md">
<span class="material-symbols-outlined text-[20px]">photo_camera</span>
</span>
                                        <span class="font-label-md text-label-md text-on-surface mt-1">Billboard_Main_4K.jpg</span>
                                        <span class="font-body-sm text-body-sm text-secondary">Cargada correctamente (6.4 MB)</span>
                                    </div>
                                </div>
                                <span class="font-body-sm text-body-sm text-outline">Imagen principal del reproductor web y Smart TV.</span>
                            </div>
                            <!-- Póster Vertical (2:3) Para Búsqueda y Apps -->
                            <div class="flex flex-col gap-space-xs">
                                <label class="font-label-sm text-label-sm text-on-surface flex items-center justify-between">
                                    <span>Póster Vertical (Mobile 2:3) *</span>
                                    <span class="font-badge-spec text-badge-spec text-outline">2000 x 3000 px</span>
                                </label>
                                <div class="relative group rounded-lg overflow-hidden bg-surface-container h-[188px] flex flex-col items-center justify-center p-space-sm cursor-pointer shadow-inner">
                                    <img class="absolute inset-0 w-full h-full object-cover opacity-75 group-hover:scale-105 transition-transform duration-500"
                                         data-alt="Vertical portrait of an astronaut commander looking intently with reflected red solar flare on helmet visor, dark cinematic sci-fi movie poster styling with subtle grain, highly detailed."
                                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDapltJZAzt_VoWOuvZfkCDfKGqPeGeJeQ9Y8o5DJT0x5NTVI85SM1pV4fDybXOAjC5No9QRqMZI09OsY42Ila8iN2jPGoxNcm7xBunc2fcqQUNj1Gp3JSgLwXlkGeMwcJ3f3MFF-X-ZwouPPQidgkMQGy4iwMfV40deJ1NbRKlceZK4DCpLykaXBKGdI6YP3xvD3N6kLQB-RVUDJElBdvyGa1DYQAZkZLMIfBvh7mu31zWblKV0K54"/>
                                    <div class="absolute inset-0 bg-gradient-to-t from-surface-container-lowest/90 via-surface-container-lowest/20 to-transparent"></div>
                                    <div class="relative z-10 flex flex-col items-center text-center gap-1">
<span class="w-10 h-10 rounded-full bg-surface/80 backdrop-blur-md flex items-center justify-center text-on-surface shadow-md">
<span class="material-symbols-outlined text-[20px]">file_upload</span>
</span>
                                        <span class="font-label-md text-label-md text-on-surface mt-1">Poster_Keyart_Vertical.png</span>
                                        <span class="font-body-sm text-body-sm text-secondary">Cargada correctamente (4.1 MB)</span>
                                    </div>
                                </div>
                                <span class="font-body-sm text-body-sm text-outline">Formato para carruseles de móvil y recomendaciones.</span>
                            </div>
                        </div>
                        <!-- Tráiler & Gestor de Pistas Multilingües -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-space-md">
                            <!-- Trailer Upload -->
                            <div class="flex flex-col gap-space-xs p-space-sm rounded-lg bg-surface-container">
                                <div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-primary">smart_display</span>
                Tráiler Oficial (Preview Loop 4K)
              </span>
                                    <span class="font-badge-spec text-badge-spec text-secondary uppercase">Listo</span>
                                </div>
                                <div class="flex items-center justify-between p-space-xs rounded bg-surface-container-high">
                                    <div class="flex items-center gap-space-xs truncate">
                                        <span class="material-symbols-outlined text-outline text-[18px]">movie</span>
                                        <span class="font-body-sm text-body-sm text-on-surface truncate">trailer_red_horizon_es_4k.mp4</span>
                                    </div>
                                    <span class="font-body-sm text-body-sm text-outline">482 MB</span>
                                </div>
                            </div>
                            <!-- Languages & Subtitles Badges -->
                            <div class="flex flex-col gap-space-xs p-space-sm rounded-lg bg-surface-container">
                                <div class="flex items-center justify-between">
<span class="font-label-sm text-label-sm text-on-surface flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-tertiary">translate</span>
                Subtítulos y Pistas de Doblaje
              </span>
                                    <span class="font-badge-spec text-badge-spec text-tertiary uppercase">6 Idiomas</span>
                                </div>
                                <div class="flex flex-wrap gap-1 mt-1">
                                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">ES (Castellano)</span>
                                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">EN (Original)</span>
                                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">ES (LatAm)</span>
                                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">FR (Francés)</span>
                                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">IT (Italiano)</span>
                                    <span class="font-badge-spec text-badge-spec px-1.5 py-0.5 rounded bg-surface-container-high text-on-surface">DE (Alemán)</span>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <script>
            function handleSynopsisInput(textarea) {
                const counter = document.getElementById('charCount');
                const length = textarea.value.length;
                counter.innerText = length + ' / 250';
                updateLivePreview();
            }

            function updateLivePreview() {
                const locTitle = document.getElementById('inputLocalizedTitle').value.trim();
                const origTitle = document.getElementById('inputOriginalTitle').value.trim();
                const synopsis = document.getElementById('inputShortSynopsis').value.trim();
                const year = document.getElementById('inputReleaseYear').value.trim();
                const runtime = document.getElementById('inputRuntime').value.trim();

                const previewTitle = document.getElementById('previewTitle');
                const previewSynopsis = document.getElementById('previewSynopsis');
                const previewYear = document.getElementById('previewYear');
                const previewRuntime = document.getElementById('previewRuntime');

                if (locTitle) {
                    previewTitle.innerText = locTitle;
                } else if (origTitle) {
                    previewTitle.innerText = origTitle;
                } else {
                    previewTitle.innerText = 'Título de la Película';
                }

                if (synopsis) {
                    previewSynopsis.innerText = synopsis;
                } else {
                    previewSynopsis.innerText = 'Sinopsis descriptiva pendiente de redacción editorial...';
                }

                if (year) previewYear.innerText = year;
                if (runtime) previewRuntime.innerText = runtime;
            }

            function toggleBadge(btn) {
                const isSelected = btn.classList.contains('bg-primary-container');
                if (isSelected) {
                    btn.classList.remove('bg-primary-container', 'text-on-primary-container');
                    btn.classList.add('bg-surface-container', 'text-outline');
                } else {
                    btn.classList.remove('bg-surface-container', 'text-outline');
                    btn.classList.add('bg-primary-container', 'text-on-primary-container');
                }
            }

            function selectAgeRating(rating, clickedElement) {
                const allCards = document.querySelectorAll('.age-card');
                allCards.foreach(card => {
                    card.classList.remove('bg-primary-container', 'text-on-primary-container', 'shadow-sm');
                    card.classList.add('bg-surface-container', 'text-on-surface');
                    const badgeSpec = card.querySelector('span:last-child');
                    if (badgeSpec) {
                        badgeSpec.classList.remove('opacity-90');
                        badgeSpec.classList.add('text-outline');
                    }
                });

                clickedElement.classList.remove('bg-surface-container');
                clickedElement.classList.add('bg-primary-container', 'text-on-primary-container', 'shadow-sm');
                const innerBadge = clickedElement.querySelector('span:last-child');
                if (innerBadge) {
                    innerBadge.classList.remove('text-outline');
                    innerBadge.classList.add('opacity-90');
                }

                const previewRating = document.getElementById('previewRating');
                if (previewRating) {
                    previewRating.innerText = rating;
                }
            }

            function setPreviewMode(mode) {
                const heroBtn = document.getElementById('btnHeroView');
                const shelfBtn = document.getElementById('btnShelfView');
                const heroView = document.getElementById('previewHeroMode');
                const shelfView = document.getElementById('previewShelfMode');

                if (mode === 'hero') {
                    heroBtn.classList.remove('text-outline');
                    heroBtn.classList.add('bg-surface', 'text-on-surface', 'shadow-sm');
                    shelfBtn.classList.remove('bg-surface', 'text-on-surface', 'shadow-sm');
                    shelfBtn.classList.add('text-outline');

                    heroView.classList.remove('hidden');
                    shelfView.classList.add('hidden');
                } else {
                    shelfBtn.classList.remove('text-outline');
                    shelfBtn.classList.add('bg-surface', 'text-on-surface', 'shadow-sm');
                    heroBtn.classList.remove('bg-surface', 'text-on-surface', 'shadow-sm');
                    heroBtn.classList.add('text-outline');

                    shelfView.classList.remove('hidden');
                    heroView.classList.add('hidden');
                }
            }

            function scrollToPreview() {
                const target = document.getElementById('livePreviewContainer');
                if (target) {
                    target.scrollIntoView({behavior: 'smooth', block: 'start'});
                }
            }
        </script>
    </main>


<?php
include_once "app/Views/backend/new_template/backend.footer.php";