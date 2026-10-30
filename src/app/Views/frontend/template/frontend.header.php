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
                    class="flex items-center gap-space-sm flex-shrink-0" data-path="inicio" href="#">
                <img alt="Netflix Logo" class="h-8 w-auto object-contain"
                     src="app/Views/frontend/images/logo.png"/><span
                        class="sr-only">Netflix</span></a>
            <nav class="hidden lg:flex items-center gap-space-lg overflow-x-auto py-space-xs"
                 data-active-classes="text-on-surface font-headline-md font-bold tracking-normal">
                <a aria-current="page"
                   class="transition-colors whitespace-nowrap text-on-surface font-headline-md font-bold tracking-normal"
                   data-path="inicio"
                   href="/">Inicio</a><a
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
            <?php
                if(!isset($_SESSION['user'])){
                    echo "
                       <a href='/login'><button class='flex items-center gap-space-xs bg-primary-container hover:bg-inverse-primary text-on-primary-container px-space-md py-2 rounded-lg font-label-md text-label-md transition-all shadow-md active:scale-95' name='bt_login'>Iniciar Sesión</button></a>
                    ";
                }else{
                    echo "
                        <div class='flex items-center gap-space-xs cursor-pointer group relative py-space-xs'>
                            <div class='w-8 h-8 rounded-full bg-primary flex items-center justify-center'>
                                <span class='material-symbols-outlined text-on-primary text-[18px]'>person</span>
                            </div>
                            <span class='material-symbols-outlined text-[18px] text-on-surface-variant group-hover:text-on-surface transition-transform duration-200 group-hover:rotate-180'>arrow_drop_down</span>
                        </div>
                    ";
                }
                ?>

        </div>
    </div>
</header>
