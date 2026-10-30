<!DOCTYPE html>

<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_standard" name="shell-type"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
          rel="stylesheet"/>
    <style>@layer base {
            html, body {
                margin: 0;
                padding: 0;
            }

            body {
                overscroll-behavior: none;
            }

            main > :first-child {
                margin-top: 0 !important;
            }

            main > :last-child {
                margin-bottom: 0 !important;
            }
        }

        ::-webkit-scrollbar {
            display: none;
        }</style>
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">tailwind.config = {
            "darkMode": "class", "theme": {
                "extend": {
                    "colors": {
                        "tertiary-fixed": "#8ff2fe",
                        "on-secondary-fixed": "#002108",
                        "on-secondary-fixed-variant": "#00531f",
                        "surface-container-high": "#2a2a2a",
                        "surface-variant": "#353534",
                        "on-tertiary-fixed-variant": "#004f56",
                        "on-primary-fixed-variant": "#930007",
                        "on-primary-fixed": "#410001",
                        "on-tertiary": "#00363c",
                        "outline-variant": "#5e3f3b",
                        "on-primary-container": "#fff7f6",
                        "tertiary-fixed-dim": "#72d5e1",
                        "primary-fixed": "#ffdad5",
                        "background": "#131313",
                        "on-secondary-container": "#003712",
                        "on-tertiary-container": "#ecfdff",
                        "inverse-surface": "#e5e2e1",
                        "surface-container-highest": "#353534",
                        "error": "#ffb4ab",
                        "on-error-container": "#ffdad6",
                        "outline": "#af8782",
                        "on-background": "#e5e2e1",
                        "on-surface-variant": "#e9bcb6",
                        "surface-tint": "#ffb4aa",
                        "on-tertiary-fixed": "#001f23",
                        "secondary-fixed-dim": "#55e074",
                        "error-container": "#93000a",
                        "primary": "#ffb4aa",
                        "on-primary": "#690003",
                        "surface": "#131313",
                        "on-error": "#690005",
                        "surface-container-low": "#1c1b1b",
                        "inverse-on-surface": "#313030",
                        "surface-container-lowest": "#0e0e0e",
                        "secondary": "#55e074",
                        "on-surface": "#e5e2e1",
                        "tertiary": "#72d5e1",
                        "inverse-primary": "#c0000c",
                        "secondary-fixed": "#74fe8e",
                        "secondary-container": "#02ad49",
                        "primary-fixed-dim": "#ffb4aa",
                        "surface-dim": "#131313",
                        "tertiary-container": "#007f8a",
                        "primary-container": "#e50914",
                        "surface-bright": "#393939",
                        "surface-container": "#201f1f",
                        "on-secondary": "#003913"
                    },
                    "borderRadius": {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
                    "spacing": {
                        "margin": "3.5rem",
                        "gutter-lg": "1.5rem",
                        "space-2xl": "4rem",
                        "space-lg": "1.5rem",
                        "gutter-sm": "0.75rem",
                        "space-xl": "2.5rem",
                        "space-md": "1rem",
                        "space-xs": "0.25rem",
                        "space-sm": "0.5rem",
                        "gutter": "1rem",
                        "margin-mobile": "1rem",
                        "margin-tablet": "2rem"
                    },
                    "fontFamily": {
                        "headline-xl-mobile": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-sm": ["Inter"],
                        "body-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "headline-xl": ["Inter"],
                        "label-md": ["Inter"],
                        "display-hero": ["Inter"],
                        "display-hero-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "badge-spec": ["Inter"]
                    },
                    "fontSize": {
                        "headline-xl-mobile": ["24px", {
                            "lineHeight": "30px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "headline-lg": ["24px", {
                            "lineHeight": "32px",
                            "letterSpacing": "-0.015em",
                            "fontWeight": "700"
                        }],
                        "body-sm": ["12px", {"lineHeight": "16px", "fontWeight": "400"}],
                        "body-md": ["14px", {"lineHeight": "20px", "fontWeight": "400"}],
                        "label-sm": ["11px", {"lineHeight": "14px", "letterSpacing": "0.04em", "fontWeight": "700"}],
                        "headline-md": ["20px", {
                            "lineHeight": "28px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "700"
                        }],
                        "headline-xl": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }],
                        "label-md": ["13px", {"lineHeight": "18px", "letterSpacing": "0.01em", "fontWeight": "600"}],
                        "display-hero": ["56px", {
                            "lineHeight": "64px",
                            "letterSpacing": "-0.03em",
                            "fontWeight": "900"
                        }],
                        "display-hero-mobile": ["32px", {
                            "lineHeight": "38px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "800"
                        }],
                        "body-lg": ["16px", {"lineHeight": "24px", "fontWeight": "400"}],
                        "badge-spec": ["10px", {"lineHeight": "12px", "letterSpacing": "0.06em", "fontWeight": "800"}]
                    }
                }
            }
        };</script>
</head>
<body class="bg-surface font-body-md text-on-surface min-h-screen">
<header class="fixed top-0 left-0 right-0 z-50 transition-all duration-300 bg-gradient-to-b from-surface-container-lowest/90 via-surface-container-lowest/60 to-transparent backdrop-blur-md shadow-[0_4px_24px_rgba(0,0,0,0.6)]">
    <div class="h-16 w-full px-margin-mobile md:px-margin-tablet xl:px-margin flex items-center justify-between gap-space-lg">
        <div class="flex items-center gap-space-xl flex-1 min-w-0"><a
                    class="flex items-center gap-space-sm flex-shrink-0" data-path="inicio" href="#"><img
                        alt="Netflix Logo" class="h-8 w-auto object-contain"
                        src="app/Views/frontend/logo.png"/><span
                        class="sr-only">Netflix</span></a>
            <nav class="hidden lg:flex items-center gap-space-lg overflow-x-auto py-space-xs"
                 data-active-classes="text-on-surface font-headline-md font-bold tracking-normal"><a
                        class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors whitespace-nowrap"
                        data-path="inicio" href="/">Inicio</a><a
                        class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors whitespace-nowrap"
                        data-path="series-tv" href="#">Series TV</a><a
                        class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors whitespace-nowrap"
                        data-path="peliculas" href="#">Películas</a><a
                        class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors whitespace-nowrap"
                        data-path="videojuegos" href="#">Videojuegos</a><a
                        class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors whitespace-nowrap"
                        data-path="novedades-populares" href="#">Novedades populares</a><a
                        class="font-label-md text-label-md text-on-surface-variant hover:text-on-surface transition-colors whitespace-nowrap"
                        data-path="mi-lista" href="#">Mi lista</a></nav>
        </div>
        <div class="flex items-center gap-space-md flex-shrink-0">
            <div class="relative flex items-center">
                <button aria-label="Buscar"
                        class="flex items-center justify-center p-space-xs text-on-surface-variant hover:text-on-surface transition-colors"
                        type="button"><span class="material-symbols-outlined text-[22px]">search</span></button>
            </div>
            <button aria-label="Notificaciones"
                    class="relative flex items-center justify-center p-space-xs text-on-surface-variant hover:text-on-surface transition-colors"
                    type="button"><span class="material-symbols-outlined text-[22px]">notifications</span><span
                        class="absolute top-1 right-1 w-2 h-2 rounded-full bg-primary-container ring-2 ring-surface"></span>
            </button>
            <div class="flex items-center gap-space-xs cursor-pointer group relative py-space-xs">
                <div class="w-8 h-8 rounded-full bg-primary flex items-center justify-center"><span
                            class="material-symbols-outlined text-on-primary text-[18px]">person</span></div>
                <span class="material-symbols-outlined text-[18px] text-on-surface-variant group-hover:text-on-surface transition-transform duration-200 group-hover:rotate-180">arrow_drop_down</span>
            </div>
        </div>
    </div>
</header>
<main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
    <div class="flex flex-col w-full">
        <!-- ATMOSPHERIC CINEMATIC 404 HERO -->
        <section
                class="relative w-full -mt-16 pt-24 pb-space-2xl overflow-hidden min-h-[720px] flex flex-col justify-center">
            <!-- Cinematic Dark Space Background Plate -->
            <div class="absolute inset-0 bg-cover bg-center opacity-30 mix-blend-screen scale-105 pointer-events-none transform transition-transform duration-1000"
                 data-alt="Deep cinematic outer space void with distant nebula dust, broken satellite solar panels drifting in darkness, faint red ambient glow on cosmic debris, high-contrast anamorphic lens flare, dark obsidian mood reminiscent of interstellar sci-fi cinematography."
                 style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAn39tdNZgxa_7AgIAWdafRplmMitk2X82q9AjlCMahHYdUWtsbnihSfmaGVZD-Z8zbAHOyq0em43bWsckbzX6wT0hkhDg-1npaps94gmqHIIVWueDx0TCm3HQrK17PJaF6nPb-CAG7qLnJkreh2bvskZMsmwKPUSEWeXS-BkMVU1fyMgchsewyarEqWb5xKKNCVRInsPMp866XOB-TIcXRlIj1E5EzrZ72zzx9QOM')">
            </div>
            <!-- Directional Vignette Scrims -->
            <div class="absolute inset-0 bg-gradient-to-t from-surface via-surface/80 to-surface-container-lowest/90 pointer-events-none"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-surface-container-lowest via-transparent to-surface-container-lowest/90 pointer-events-none"></div>
            <!-- Subtle Ambient Nebula Glow Pulsing -->
            <div class="absolute -top-32 left-1/2 -translate-x-1/2 w-[700px] h-[360px] bg-primary-container/15 blur-[120px] rounded-full pointer-events-none"></div>
            <!-- Core Content Wrapper -->
            <div class="relative z-10 w-full max-w-6xl mx-auto px-margin-mobile md:px-margin-tablet xl:px-margin flex flex-col items-center text-center mt-space-lg">
                <!-- Monolithic 404 Visual Anchor -->
                <div class="relative select-none flex items-center justify-center mb-space-md">
<span class="font-display-hero text-[110px] md:text-[160px] lg:text-[200px] leading-none tracking-tighter font-black text-transparent bg-clip-text bg-gradient-to-b from-on-surface via-surface-variant to-surface-container-low drop-shadow-[0_15px_35px_rgba(0,0,0,0.9)] opacity-90">
          404
        </span>
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
<span class="font-display-hero text-[110px] md:text-[160px] lg:text-[200px] leading-none tracking-tighter font-black text-primary-container/20 blur-xl">
            404
          </span>
                    </div>
                </div>
                <!-- High-Contrast Brand Headline & Subtitle -->
                <div class="max-w-3xl flex flex-col items-center gap-space-sm -mt-space-lg md:-mt-space-xl">
                    <div class="inline-flex items-center gap-space-xs px-space-md py-space-xs rounded-full bg-surface-container-high/70 backdrop-blur-md shadow-sm mb-space-xs">
                        <span class="w-2 h-2 rounded-full bg-primary-container animate-ping"></span>
                        <span class="font-badge-spec text-badge-spec text-on-surface-variant uppercase tracking-widest">Transmisión interrumpida</span>
                    </div>
                    <h1 class="font-headline-xl text-headline-xl md:text-display-hero md:font-display-hero text-on-surface font-extrabold tracking-tight">
                        ¿Te has perdido en el espacio?
                    </h1>
                    <p class="font-body-lg text-body-lg text-on-surface-variant max-w-2xl leading-relaxed mt-space-xs">
                        <?= $error ?? "Lo sentimos, no hemos podido encontrar esa página. Pero no te preocupes: hay miles de historias, películas y videojuegos esperándote al otro lado." ?>
                    </p>
                </div>
                <!-- Action Cluster: Primary CTA + Fast Integrated Search Bar -->
                <div class="w-full max-w-2xl mt-space-xl flex flex-col sm:flex-row items-center justify-center gap-space-md">
                    <a class="w-full sm:w-auto inline-flex items-center justify-center gap-space-sm px-space-xl py-space-md rounded-lg bg-on-surface text-surface font-headline-md text-headline-md font-bold hover:bg-on-surface/85 transition-all duration-200 shadow-xl group"
                       href="/">
                        <span class="material-symbols-outlined text-[22px] transition-transform duration-200 group-hover:-translate-x-1"
                              style="font-variation-settings: 'FILL' 1;">home</span>
                        <span>Inicio de Netflix</span>
                    </a>
                    <!-- Embedded Quick Search Input -->
                    <div class="w-full sm:flex-1 relative flex items-center">
                        <label class="sr-only" for="recovery-search">Buscar títulos, géneros o juegos</label>
                        <div class="absolute left-space-md flex items-center pointer-events-none text-on-surface-variant">
                            <span class="material-symbols-outlined text-[20px]">search</span>
                        </div>
                        <input class="w-full bg-surface-container-high/90 focus:bg-surface-variant text-on-surface placeholder:text-on-surface-variant/60 font-body-md text-body-md pl-11 pr-space-md py-space-md rounded-lg transition-colors duration-200 outline-none shadow-inner"
                               id="recovery-search" placeholder="Buscar títulos, directores, juegos..." type="text"/>
                    </div>
                </div>
                <!-- Diagnostic Code & Help Desk Support Indicator -->
                <div class="mt-space-lg flex flex-wrap items-center justify-center gap-x-space-md gap-y-space-xs text-on-surface-variant/70 font-body-sm text-body-sm">
<span class="inline-flex items-center gap-space-xs">
<span class="material-symbols-outlined text-[15px] text-primary-container">satellite_alt</span>
<span>Código de error: <strong class="text-on-surface font-semibold tracking-wider">NSES-404</strong></span>
</span>
                    <span class="text-surface-bright hidden sm:inline">•</span>
                    <span>Rayo cósmico interrumpió la señal</span>
                    <span class="text-surface-bright hidden sm:inline">•</span>
                    <a class="inline-flex items-center gap-space-xs text-on-surface hover:text-primary transition-colors underline decoration-outline-variant underline-offset-4 font-label-md text-label-md"
                       href="#">
                        <span>Visitar Centro de ayuda</span>
                        <span class="material-symbols-outlined text-[14px]">arrow_outward</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- RESCUE SHELF: RECOMMENDED CONTENT ROW -->
        <section class="w-full max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet xl:px-margin py-space-xl">
            <!-- Shelf Header & Navigation Controls -->
            <div class="flex items-end justify-between mb-space-lg">
                <div class="flex flex-col gap-space-xs">
                    <div class="flex items-center gap-space-xs">
                        <span class="w-1.5 h-4 bg-primary-container rounded-full"></span>
                        <span class="font-label-sm text-label-sm text-on-surface-variant tracking-wider uppercase">Sugerencias para retomar el rumbo</span>
                    </div>
                    <h2 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">
                        Títulos populares recomendados para ti
                    </h2>
                </div>
                <div class="hidden sm:flex items-center gap-space-xs">
                    <button aria-label="Anterior"
                            class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors shadow-sm"
                            id="shelf-prev">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <button aria-label="Siguiente"
                            class="w-10 h-10 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors shadow-sm"
                            id="shelf-next">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </div>
            <!-- Dynamic Thumbnail Grid / Shelf -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-space-md overflow-x-auto pb-space-sm scrollbar-none"
                 id="shelf-container">
                <!-- CARD 1: Cyber Chronicles: Neo-Tokyo -->
                <article
                        class="group relative flex flex-col bg-surface-container-low rounded-lg overflow-hidden transition-all duration-300 hover:scale-[1.03] hover:shadow-2xl hover:z-20">
                    <!-- Thumbnail Media Container (16:9) -->
                    <div class="relative w-full aspect-video overflow-hidden bg-surface-container-high">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                             data-alt="Futuristic cyberpunk metropolis neon cityscape at night, rain slicked streets reflecting crimson and cyan holographic advertisements, lone female operative in trench coat looking up at towering holographic monoliths, dark moody cinematic sci-fi movie frame."
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBUTtxJtnHCVxQXbkgOubFZht5kNVac4a_BBG2HceKASncJEK39xpyxEgiAgR7j3FX47zzjn8syQy099wGfcE9WgqGttbAnvHYUQY6EatR-_c3sWyLa8jJ8QP3T7k3YMmM8Ma2BbsYG0SF2USte7gqJbenk6fYXDSpI5Vg1X4_kHy5T_GMmcKIsx0hMc_t6b6GkUYGYMpu1XunKkqITBTXOrPvsVQTrw0mcMvISiEo')">
                        </div>
                        <!-- Top Badge -->
                        <div class="absolute top-2 left-2 px-space-xs py-0.5 rounded bg-surface-container-lowest/80 backdrop-blur-md">
                            <span class="font-badge-spec text-badge-spec text-primary-container uppercase font-bold tracking-widest">N Original</span>
                        </div>
                        <!-- Play Action Floating Trigger -->
                        <button aria-label="Reproducir Cyber Chronicles"
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-surface-container-lowest/40 backdrop-blur-[2px]">
                            <div class="w-12 h-12 rounded-full bg-on-surface text-surface flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                <span class="material-symbols-outlined text-[28px]"
                                      style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </button>
                    </div>
                    <!-- Metadata Panel -->
                    <div class="p-space-md flex flex-col gap-space-xs flex-1 bg-surface-container-low">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-secondary font-bold">98% para ti</span>
                            <div class="flex items-center gap-space-xs">
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">16+</span>
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">4K UHD</span>
                            </div>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold leading-tight group-hover:text-primary transition-colors">
                            Cyber Chronicles: Neo-Tokyo
                        </h3>
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span>Ciencia ficción</span>
                            <span class="text-surface-variant">•</span>
                            <span>Thriller</span>
                            <span class="text-surface-variant">•</span>
                            <span>2 h 14 min</span>
                        </div>
                        <!-- Quick Action Drawer on Hover -->
                        <div class="pt-space-xs mt-auto flex items-center gap-space-xs">
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Añadir a Mi lista">
                                <span class="material-symbols-outlined text-[18px]">add</span>
                            </button>
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Me gusta">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                            </button>
                            <a class="ml-auto font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface flex items-center gap-0.5"
                               href="#">
                                <span>Detalles</span>
                                <span class="material-symbols-outlined text-[14px]">expand_more</span>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- CARD 2: Stranger Mysteries -->
                <article
                        class="group relative flex flex-col bg-surface-container-low rounded-lg overflow-hidden transition-all duration-300 hover:scale-[1.03] hover:shadow-2xl hover:z-20">
                    <!-- Thumbnail Media Container (16:9) -->
                    <div class="relative w-full aspect-video overflow-hidden bg-surface-container-high">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                             data-alt="Misty shadowy 1980s forest road illuminated only by bicycle headlights, vintage mystery thriller mood, dark deep obsidian pines, eerie retro supernatural atmosphere with ambient red backlight glow in dense fog."
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDcbIYwFgDfyvB5Zf1M5J4oobkX1adYCaDS31KT8iw3N88LZFf_r9t-rdgXGXVGJuIekYQl3kgKV7vV6mHgnbARmA6uayhDTGZPNCspB3yVFRLt2npASNJL3Q1N4mmwGFcGtzmGNnP08SA0BDJYa_R3bErToDhNVbCCv9JKXF3XUu7hX7s87jEtEYEamu7XTQCtThl96ENqcS9DKHN8fzxFxTWFvmCRgkX7CCabRaw')">
                        </div>
                        <div class="absolute top-2 left-2 px-space-xs py-0.5 rounded bg-primary-container text-on-primary-container">
                            <span class="font-badge-spec text-badge-spec uppercase font-extrabold tracking-widest">Top 10</span>
                        </div>
                        <!-- Play Action Trigger -->
                        <button aria-label="Reproducir Stranger Mysteries"
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-surface-container-lowest/40 backdrop-blur-[2px]">
                            <div class="w-12 h-12 rounded-full bg-on-surface text-surface flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                <span class="material-symbols-outlined text-[28px]"
                                      style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </button>
                    </div>
                    <!-- Metadata Panel -->
                    <div class="p-space-md flex flex-col gap-space-xs flex-1 bg-surface-container-low">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-secondary font-bold">95% para ti</span>
                            <div class="flex items-center gap-space-xs">
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">13+</span>
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">4 Temporadas</span>
                            </div>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold leading-tight group-hover:text-primary transition-colors">
                            Stranger Mysteries
                        </h3>
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span>Suspense</span>
                            <span class="text-surface-variant">•</span>
                            <span>Terror nostálgico</span>
                            <span class="text-surface-variant">•</span>
                            <span>Intrigante</span>
                        </div>
                        <!-- Quick Action Drawer -->
                        <div class="pt-space-xs mt-auto flex items-center gap-space-xs">
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Añadir a Mi lista">
                                <span class="material-symbols-outlined text-[18px]">add</span>
                            </button>
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Me gusta">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                            </button>
                            <a class="ml-auto font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface flex items-center gap-0.5"
                               href="#">
                                <span>Detalles</span>
                                <span class="material-symbols-outlined text-[14px]">expand_more</span>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- CARD 3: Hades: Nether Realm (Videojuego) -->
                <article
                        class="group relative flex flex-col bg-surface-container-low rounded-lg overflow-hidden transition-all duration-300 hover:scale-[1.03] hover:shadow-2xl hover:z-20">
                    <!-- Thumbnail Media Container (16:9) -->
                    <div class="relative w-full aspect-video overflow-hidden bg-surface-container-high">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                             data-alt="Dynamic mythological underworld battlefield with warrior wielding glowing blood-red celestial blade, surrounded by dark obsidian magma crystals and stylized Greek spirits, vivid crimson action videogame art style."
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC1HJ4T9mdGNXKOde-dAQc9-on0MehK4LkVkTJxNWJUMABqthkucmevofcDuUP4zV6Q1R0Y3A0PBwSsQGgJ1WEfSRTLdytH6YGalZ8rH1-Mz2gl72Vx8Cj3glb_BRsC7ey4Sy7xGCXxRy0dqA_JnwbsrgrE-tH22mjBkXHd5vxbc1PdrvIzxzdSvEq7wWLR_JSLIi5A9Ty0d8fnf8-G5FPakiQ8rSsHL8p6AYn9MiI')">
                        </div>
                        <div class="absolute top-2 left-2 px-space-xs py-0.5 rounded bg-tertiary-container/90 text-on-tertiary-container backdrop-blur-md flex items-center gap-1">
                            <span class="material-symbols-outlined text-[13px]">sports_esports</span>
                            <span class="font-badge-spec text-badge-spec uppercase font-extrabold tracking-widest">Juego en la nube</span>
                        </div>
                        <!-- Game Play Action Trigger -->
                        <button aria-label="Jugar Hades: Nether Realm"
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-surface-container-lowest/40 backdrop-blur-[2px]">
                            <div class="w-12 h-12 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                <span class="material-symbols-outlined text-[24px]">sports_esports</span>
                            </div>
                        </button>
                    </div>
                    <!-- Metadata Panel -->
                    <div class="p-space-md flex flex-col gap-space-xs flex-1 bg-surface-container-low">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-secondary font-bold">Nuevo lanzamiento</span>
                            <div class="flex items-center gap-space-xs">
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">Móvil / TV</span>
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">Mando</span>
                            </div>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold leading-tight group-hover:text-primary transition-colors">
                            Hades: Nether Realm
                        </h3>
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span>Roguelike</span>
                            <span class="text-surface-variant">•</span>
                            <span>Acción</span>
                            <span class="text-surface-variant">•</span>
                            <span>Sin anuncios</span>
                        </div>
                        <!-- Quick Action Drawer -->
                        <div class="pt-space-xs mt-auto flex items-center gap-space-xs">
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Instalar en móvil">
                                <span class="material-symbols-outlined text-[18px]">download</span>
                            </button>
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Me gusta">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                            </button>
                            <a class="ml-auto font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface flex items-center gap-0.5"
                               href="#">
                                <span>Detalles</span>
                                <span class="material-symbols-outlined text-[14px]">expand_more</span>
                            </a>
                        </div>
                    </div>
                </article>
                <!-- CARD 4: Shadow of Mayfair (Película) -->
                <article
                        class="group relative flex flex-col bg-surface-container-low rounded-lg overflow-hidden transition-all duration-300 hover:scale-[1.03] hover:shadow-2xl hover:z-20">
                    <!-- Thumbnail Media Container (16:9) -->
                    <div class="relative w-full aspect-video overflow-hidden bg-surface-container-high">
                        <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                             data-alt="Victorian London aristocratic ballroom shrouded in candlelit shadows, elegant figures whispering in dark velvet attire, dramatic film noir tension, golden amber light cutting through smoke and crystal chandeliers."
                             style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCJ2GeAlJd2tve4ufwrP-WgZityE34SpVhAjMnOD0Wty68_nx0LyhfFgSZDdGmC1Vv2pcUmpUFWrqNFRQguY1oVThgA1shFWC__b-oGsg6tmEWs9bLk6yVhTZfIrU3Fg-tL1zvN9gyQXd4Y32wmKApCDnOzJ1_mysqda4LHjGgs3pmFybh2QjhmnvRz9qh1OPqkyF3PJ-LCV3m-Y2ZJ5OdyQGTAEEFqZv527yF9fSw')">
                        </div>
                        <div class="absolute top-2 left-2 px-space-xs py-0.5 rounded bg-surface-container-lowest/80 backdrop-blur-md">
                            <span class="font-badge-spec text-badge-spec text-on-surface uppercase font-bold tracking-widest">Película</span>
                        </div>
                        <!-- Play Action Trigger -->
                        <button aria-label="Reproducir Shadow of Mayfair"
                                class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200 bg-surface-container-lowest/40 backdrop-blur-[2px]">
                            <div class="w-12 h-12 rounded-full bg-on-surface text-surface flex items-center justify-center shadow-xl transform scale-90 group-hover:scale-100 transition-transform">
                                <span class="material-symbols-outlined text-[28px]"
                                      style="font-variation-settings: 'FILL' 1;">play_arrow</span>
                            </div>
                        </button>
                    </div>
                    <!-- Metadata Panel -->
                    <div class="p-space-md flex flex-col gap-space-xs flex-1 bg-surface-container-low">
                        <div class="flex items-center justify-between">
                            <span class="font-label-md text-label-md text-secondary font-bold">92% para ti</span>
                            <div class="flex items-center gap-space-xs">
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">18+</span>
                                <span class="px-1.5 py-0.5 rounded text-[10px] font-bold tracking-wider bg-surface-variant text-on-surface">Dolby Vision</span>
                            </div>
                        </div>
                        <h3 class="font-headline-md text-headline-md text-on-surface font-bold leading-tight group-hover:text-primary transition-colors">
                            Shadow of Mayfair
                        </h3>
                        <div class="flex items-center gap-space-xs text-on-surface-variant font-body-sm text-body-sm">
                            <span>Drama histórico</span>
                            <span class="text-surface-variant">•</span>
                            <span>Intriga</span>
                            <span class="text-surface-variant">•</span>
                            <span>1 h 58 min</span>
                        </div>
                        <!-- Quick Action Drawer -->
                        <div class="pt-space-xs mt-auto flex items-center gap-space-xs">
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Añadir a Mi lista">
                                <span class="material-symbols-outlined text-[18px]">add</span>
                            </button>
                            <button class="w-8 h-8 rounded-full bg-surface-container-high hover:bg-surface-variant flex items-center justify-center text-on-surface transition-colors"
                                    title="Me gusta">
                                <span class="material-symbols-outlined text-[18px]">thumb_up</span>
                            </button>
                            <a class="ml-auto font-label-sm text-label-sm text-on-surface-variant hover:text-on-surface flex items-center gap-0.5"
                               href="#">
                                <span>Detalles</span>
                                <span class="material-symbols-outlined text-[14px]">expand_more</span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </section>
        <!-- QUICK GENRE CATEGORIES FALLBACK -->
        <section class="w-full max-w-7xl mx-auto px-margin-mobile md:px-margin-tablet xl:px-margin pb-space-2xl">
            <div class="p-space-lg rounded-xl bg-surface-container-low flex flex-col md:flex-row items-center justify-between gap-space-lg">
                <div class="flex flex-col gap-space-xs text-center md:text-left">
                    <h3 class="font-headline-md text-headline-md text-on-surface font-bold">
                        Explora por tus categorías favoritas
                    </h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Navega directamente a los géneros más reproducidos hoy en tu región.
                    </p>
                </div>
                <!-- Pill Navigators -->
                <div class="flex flex-wrap items-center justify-center gap-space-sm">
                    <a class="px-space-md py-space-sm rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors"
                       href="#">
                        Películas de acción
                    </a>
                    <a class="px-space-md py-space-sm rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors"
                       href="#">
                        Series galardonadas
                    </a>
                    <a class="px-space-md py-space-sm rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors"
                       href="#">
                        Comedias stand-up
                    </a>
                    <a class="px-space-md py-space-sm rounded-lg bg-surface-container-high hover:bg-surface-variant text-on-surface font-label-md text-label-md transition-colors"
                       href="#">
                        Animación japonesa
                    </a>
                    <a class="px-space-md py-space-sm rounded-lg bg-primary-container hover:bg-primary-container/85 text-on-primary-container font-label-md text-label-md transition-colors flex items-center gap-1"
                       href="#">
                        <span>Ver catálogo completo</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- INTERACTIVE CLIENT BEHAVIOR SCRIPT -->
        <script>
            (function initNotFoundInteractions() {
                // Horizontal shelf subtle scroll navigation
                const container = document.getElementById('shelf-container');
                const prevBtn = document.getElementById('shelf-prev');
                const nextBtn = document.getElementById('shelf-next');

                if (container && prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        container.scrollBy({left: -320, behavior: 'smooth'});
                    });
                    nextBtn.addEventListener('click', () => {
                        container.scrollBy({left: 320, behavior: 'smooth'});
                    });
                }

                // Live search input handling (visual prompt feedback)
                const searchInput = document.getElementById('recovery-search');
                if (searchInput) {
                    searchInput.addEventListener('keydown', (e) => {
                        if (e.key === 'Enter' && searchInput.value.trim().length > 0) {
                            // Simulated navigation to search page
                            window.location.hash = 'buscar=' + encodeURIComponent(searchInput.value.trim());
                        }
                    });
                }
            })();
        </script>
    </div>
</main>
<footer class="w-full bg-surface-container-lowest text-on-surface-variant/70 mt-space-2xl pt-space-2xl pb-space-xl">
    <div class="w-full max-w-6xl mx-auto px-margin-mobile md:px-margin-tablet xl:px-margin"><p
                class="font-body-md text-body-md mb-space-lg"><a
                    class="hover:underline text-on-surface-variant hover:text-on-surface" data-path="centro-de-ayuda"
                    href="#">¿Preguntas? Contáctanos.</a></p>
        <nav class="grid grid-cols-2 md:grid-cols-4 gap-y-space-md gap-x-space-lg mb-space-xl"><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="audio-descriptivo" href="#">Audio descriptivo</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="centro-de-ayuda" href="#">Centro de ayuda</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="tarjetas-de-regalo" href="#">Tarjetas de regalo</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="prensa" href="#">Prensa</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="relaciones-con-inversionistas" href="#">Relaciones con inversionistas</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="empleo" href="#">Empleo</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="terminos-de-uso" href="#">Términos de uso</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="privacidad" href="#">Privacidad</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="avisos-legales" href="#">Avisos legales</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="preferencias-de-cookies" href="#">Preferencias de cookies</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="informacion-corporativa" href="#">Información corporativa</a><a
                    class="font-body-sm text-body-sm hover:underline hover:text-on-surface transition-colors"
                    data-path="contactanos" href="#">Contáctanos</a></nav>
        <div class="mb-space-lg">
            <button class="inline-flex items-center gap-space-xs px-space-md py-space-sm bg-surface-container-high hover:bg-surface-variant text-on-surface font-body-sm text-body-sm rounded-lg transition-colors"
                    type="button"><span class="material-symbols-outlined text-[16px]">tag</span>Código de servicio
            </button>
        </div>
        <p class="font-body-sm text-body-sm text-on-surface-variant/50">© 2024 Netflix, Inc. Todos los derechos
            reservados.</p></div>
</footer>
</body>
</html>