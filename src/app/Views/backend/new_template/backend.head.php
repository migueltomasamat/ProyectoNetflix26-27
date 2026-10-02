<!DOCTYPE html>

<html class="dark" lang="es">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta content="web_dashboard" name="shell-type"/>
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800;900&amp;display=swap"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
          rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
          rel="stylesheet"/>
    <title><?=$title?></title>
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
            darkMode: "class", theme: {
                extend: {
                    colors: {
                        "secondary-fixed": "#74fe8e",
                        "on-error": "#690005",
                        "surface-container-highest": "#353534",
                        "on-tertiary-container": "#ecfdff",
                        "surface-container-high": "#2a2a2a",
                        "background": "#131313",
                        "tertiary": "#72d5e1",
                        "surface-variant": "#353534",
                        "outline": "#af8782",
                        "on-secondary-fixed": "#002108",
                        "inverse-on-surface": "#313030",
                        "tertiary-fixed": "#8ff2fe",
                        "surface-container-low": "#1c1b1b",
                        "secondary": "#55e074",
                        "surface": "#131313",
                        "on-surface-variant": "#e9bcb6",
                        "inverse-primary": "#c0000c",
                        "surface-tint": "#ffb4aa",
                        "surface-dim": "#131313",
                        "on-error-container": "#ffdad6",
                        "on-surface": "#e5e2e1",
                        "on-primary-fixed": "#410001",
                        "secondary-container": "#02ad49",
                        "on-primary-container": "#fff7f6",
                        "primary-fixed-dim": "#ffb4aa",
                        "on-tertiary-fixed": "#001f23",
                        "primary-container": "#e50914",
                        "on-primary-fixed-variant": "#930007",
                        "on-background": "#e5e2e1",
                        "error-container": "#93000a",
                        "on-primary": "#690003",
                        "primary": "#ffb4aa",
                        "on-secondary": "#003913",
                        "tertiary-fixed-dim": "#72d5e1",
                        "outline-variant": "#5e3f3b",
                        "surface-bright": "#393939",
                        "on-tertiary": "#00363c",
                        "on-tertiary-fixed-variant": "#004f56",
                        "error": "#ffb4ab",
                        "on-secondary-fixed-variant": "#00531f",
                        "surface-container": "#201f1f",
                        "secondary-fixed-dim": "#55e074",
                        "surface-container-lowest": "#0e0e0e",
                        "tertiary-container": "#007f8a",
                        "on-secondary-container": "#003712",
                        "inverse-surface": "#e5e2e1",
                        "primary-fixed": "#ffdad5"
                    },
                    borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
                    spacing: {
                        "space-xs": "0.25rem",
                        "gutter-sm": "0.75rem",
                        "gutter": "1rem",
                        "margin-mobile": "1rem",
                        "space-2xl": "4rem",
                        "gutter-lg": "1.5rem",
                        "margin": "3.5rem",
                        "space-md": "1rem",
                        "space-xl": "2.5rem",
                        "margin-tablet": "2rem",
                        "space-sm": "0.5rem",
                        "space-lg": "1.5rem"
                    },
                    fontFamily: {
                        "badge-spec": ["Inter"],
                        "label-md": ["Inter"],
                        "label-sm": ["Inter"],
                        "headline-lg": ["Inter"],
                        "body-md": ["Inter"],
                        "headline-xl-mobile": ["Inter"],
                        "body-lg": ["Inter"],
                        "headline-xl": ["Inter"],
                        "display-hero-mobile": ["Inter"],
                        "body-sm": ["Inter"],
                        "headline-md": ["Inter"],
                        "display-hero": ["Inter"]
                    },
                    fontSize: {
                        "badge-spec": ["10px", {lineHeight: "12px", letterSpacing: "0.06em", fontWeight: "800"}],
                        "label-md": ["13px", {lineHeight: "18px", letterSpacing: "0.01em", fontWeight: "600"}],
                        "label-sm": ["11px", {lineHeight: "14px", letterSpacing: "0.04em", fontWeight: "700"}],
                        "headline-lg": ["24px", {lineHeight: "32px", letterSpacing: "-0.015em", fontWeight: "700"}],
                        "body-md": ["14px", {lineHeight: "20px", fontWeight: "400"}],
                        "headline-xl-mobile": ["24px", {lineHeight: "30px", letterSpacing: "-0.01em", fontWeight: "700"}],
                        "body-lg": ["16px", {lineHeight: "24px", fontWeight: "400"}],
                        "headline-xl": ["36px", {lineHeight: "44px", letterSpacing: "-0.02em", fontWeight: "800"}],
                        "display-hero-mobile": ["32px", {lineHeight: "38px", letterSpacing: "-0.02em", fontWeight: "800"}],
                        "body-sm": ["12px", {lineHeight: "16px", fontWeight: "400"}],
                        "headline-md": ["20px", {lineHeight: "28px", letterSpacing: "-0.01em", fontWeight: "700"}],
                        "display-hero": ["56px", {lineHeight: "64px", letterSpacing: "-0.03em", fontWeight: "900"}]
                    }
                }
            }
        };</script>
</head>
<body class="bg-background font-body-md text-on-surface antialiased selection:bg-primary-container selection:text-on-primary-container">
