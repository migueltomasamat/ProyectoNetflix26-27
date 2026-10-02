<div class="grid grid-cols-1 xl:grid-cols-12 gap-gutter items-start">
    <!-- Main Interactive Visual Stream (7 Cols) -->
    <div class="xl:col-span-7 bg-surface-container-low p-gutter rounded-xl shadow-md flex flex-col gap-space-md">
        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-space-sm pb-space-sm">
            <div class="flex flex-col">
                <span class="font-headline-md text-headline-md text-on-surface font-bold">Visionado Semanal por Categoría</span>
                <span class="font-body-sm text-body-sm text-outline">Consumo total acumulado en millones de horas (M hrs)</span>
            </div>
            <div class="flex items-center gap-space-md">
                <div class="flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-primary-container"></span>
                    <span class="font-label-sm text-label-sm text-on-surface">Películas</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-on-surface"></span>
                    <span class="font-label-sm text-label-sm text-on-surface">Series TV</span>
                </div>
                <div class="flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-full bg-tertiary"></span>
                    <span class="font-label-sm text-label-sm text-on-surface">Videojuegos</span>
                </div>
            </div>
        </div>
        <!-- Main Chart SVG Graphic -->
        <div class="relative w-full h-72 sm:h-80 bg-surface-container-lowest/60 rounded-lg p-space-sm flex flex-col justify-end overflow-hidden">
            <!-- Background grid guides -->
            <div class="absolute inset-0 flex flex-col justify-between p-space-md pointer-events-none opacity-20">
                <div class="w-full h-px bg-outline"></div>
                <div class="w-full h-px bg-outline"></div>
                <div class="w-full h-px bg-outline"></div>
                <div class="w-full h-px bg-outline"></div>
            </div>
            <!-- Simulated Tooltip for Weekend Peak (Sat) -->
            <div class="absolute left-[68%] top-10 transform -translate-x-1/2 z-20 bg-surface-container-highest px-3 py-2 rounded-md shadow-xl pointer-events-none flex flex-col gap-0.5">
                <span class="font-badge-spec text-badge-spec text-secondary tracking-widest uppercase">Sábado • Pico Global</span>
                <div class="flex items-center justify-between gap-4 font-body-sm text-body-sm">
                    <span class="text-outline">Series:</span>
                    <span class="text-on-surface font-semibold">51.2M hrs</span>
                </div>
                <div class="flex items-center justify-between gap-4 font-body-sm text-body-sm">
                    <span class="text-outline">Películas:</span>
                    <span class="text-primary font-semibold">38.4M hrs</span>
                </div>
                <div class="flex items-center justify-between gap-4 font-body-sm text-body-sm">
                    <span class="text-outline">Juegos:</span>
                    <span class="text-tertiary font-semibold">9.8M hrs</span>
                </div>
            </div>
            <!-- SVG Stacked/Overlaid Curves -->
            <svg class="w-full h-full" fill="none" preserveaspectratio="none" viewbox="0 0 700 240">
                <defs>
                    <lineargradient id="gradientRed" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="0%" stop-color="#e50914" stop-opacity="0.35"></stop>
                        <stop offset="100%" stop-color="#e50914" stop-opacity="0.0"></stop>
                    </lineargradient>
                    <lineargradient id="gradientWhite" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="0%" stop-color="#e5e2e1" stop-opacity="0.2"></stop>
                        <stop offset="100%" stop-color="#e5e2e1" stop-opacity="0.0"></stop>
                    </lineargradient>
                </defs>
                <!-- Area series -->
                <path d="M 30 180 Q 130 150 230 160 T 430 120 T 530 60 T 670 95 L 670 230 L 30 230 Z"
                      fill="url(#gradientWhite)"></path>
                <path d="M 30 200 Q 130 180 230 190 T 430 150 T 530 90 T 670 140 L 670 230 L 30 230 Z"
                      fill="url(#gradientRed)"></path>
                <!-- Line strokes -->
                <!-- Series de TV (White) -->
                <path d="M 30 180 Q 130 150 230 160 T 430 120 T 530 60 T 670 95" stroke="#e5e2e1"
                      stroke-linecap="round" stroke-width="3"></path>
                <!-- Peliculas (Red) -->
                <path d="M 30 200 Q 130 180 230 190 T 430 150 T 530 90 T 670 140" stroke="#e50914"
                      stroke-linecap="round" stroke-width="3"></path>
                <!-- Videojuegos (Cyan) -->
                <path d="M 30 220 Q 130 215 230 210 T 430 195 T 530 170 T 670 185" stroke="#72d5e1"
                      stroke-dasharray="4 4" stroke-linecap="round" stroke-width="2.5"></path>
                <!-- Highlighting point for Saturday peak -->
                <circle cx="530" cy="60" fill="#e5e2e1" r="5"></circle>
                <circle cx="530" cy="90" fill="#e50914" r="5"></circle>
                <circle cx="530" cy="170" fill="#72d5e1" r="4"></circle>
                <line stroke="#ffffff" stroke-dasharray="2 2" stroke-opacity="0.3" x1="530" x2="530" y1="30"
                      y2="230"></line>
            </svg>
            <!-- X Axis labels -->
            <div class="flex justify-between px-6 pt-2 font-label-sm text-label-sm text-outline uppercase tracking-wider">
                <span>Lun</span>
                <span>Mar</span>
                <span>Mié</span>
                <span>Jue</span>
                <span>Vie</span>
                <span class="text-on-surface font-bold">Sáb</span>
                <span>Dom</span>
            </div>
        </div>
        <div class="flex items-center justify-between text-outline font-body-sm text-body-sm pt-space-xs">
<span class="flex items-center gap-1">
<span class="material-symbols-outlined text-[16px] text-secondary">check_circle</span>
          CDN Buffer Latency: 99.4% streaming sin rebuffering
        </span>
            <button class="text-primary hover:text-on-surface text-label-md font-label-md flex items-center gap-1 transition-colors">
                <span>Ver desglose detallado</span>
                <span class="material-symbols-outlined text-[16px]">chevron_right</span>
            </button>
        </div>
    </div>
    <!-- Secondary Donut Chart & Audience Breakdown (5 Cols) -->
    <div class="xl:col-span-5 flex flex-col gap-gutter">
        <!-- Donut Card -->
        <div class="bg-surface-container-low p-gutter rounded-xl shadow-md flex flex-col gap-space-md">
            <div class="flex items-center justify-between">
                <div class="flex flex-col">
                    <span class="font-headline-md text-headline-md text-on-surface font-bold">Distribución por Formato</span>
                    <span class="font-body-sm text-body-sm text-outline">Porcentaje de tiempo dedicado por los espectadores</span>
                </div>
                <span class="material-symbols-outlined text-outline">pie_chart</span>
            </div>
            <div class="flex flex-col sm:flex-row items-center gap-space-lg py-space-xs">
                <!-- Donut SVG -->
                <div class="relative w-44 h-44 flex items-center justify-center shrink-0">
                    <svg class="w-full h-full -rotate-90" viewbox="0 0 100 100">
                        <!-- Series: 54% -> stroke-dasharray 54 100 * circumference (2*pi*r = ~251.2) -->
                        <!-- r = 38 => C = 238.76 -->
                        <circle cx="50" cy="50" fill="none" r="38" stroke="#2a2a2a"
                                stroke-width="12"></circle>
                        <!-- Series 54% (128.9 / 238.7) -->
                        <circle class="transition-all duration-700" cx="50" cy="50" fill="none" r="38"
                                stroke="#e5e2e1" stroke-dasharray="128.9 238.7" stroke-dashoffset="0"
                                stroke-width="12"></circle>
                        <!-- Peliculas 32% (76.4 / 238.7) -->
                        <circle class="transition-all duration-700" cx="50" cy="50" fill="none" r="38"
                                stroke="#e50914" stroke-dasharray="76.4 238.7" stroke-dashoffset="-128.9"
                                stroke-width="12"></circle>
                        <!-- Videojuegos 10% (23.8 / 238.7) -->
                        <circle class="transition-all duration-700" cx="50" cy="50" fill="none" r="38"
                                stroke="#72d5e1" stroke-dasharray="23.8 238.7" stroke-dashoffset="-205.3"
                                stroke-width="12"></circle>
                        <!-- En Directo 4% (9.5 / 238.7) -->
                        <circle class="transition-all duration-700" cx="50" cy="50" fill="none" r="38"
                                stroke="#02ad49" stroke-dasharray="9.5 238.7" stroke-dashoffset="-229.1"
                                stroke-width="12"></circle>
                    </svg>
                    <div class="absolute flex flex-col items-center justify-center text-center">
                        <span class="font-headline-lg text-headline-lg font-bold text-on-surface">482M</span>
                        <span class="font-badge-spec text-badge-spec text-outline uppercase tracking-wider">Horas Totales</span>
                    </div>
                </div>
                <!-- Donut Legend with Metrics -->
                <div class="flex flex-col gap-space-xs w-full">
                    <div class="flex items-center justify-between p-space-xs rounded hover:bg-surface-container transition-colors">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded bg-on-surface"></span>
                            <span class="font-label-md text-label-md text-on-surface">Series Episódicas</span>
                        </div>
                        <div class="flex items-center gap-space-sm">
                            <span class="font-label-md text-label-md text-on-surface font-bold">54%</span>
                            <span class="font-body-sm text-body-sm text-outline">260M hrs</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-space-xs rounded hover:bg-surface-container transition-colors">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded bg-primary-container"></span>
                            <span class="font-label-md text-label-md text-on-surface">Largometrajes</span>
                        </div>
                        <div class="flex items-center gap-space-sm">
                            <span class="font-label-md text-label-md text-on-surface font-bold">32%</span>
                            <span class="font-body-sm text-body-sm text-outline">154M hrs</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-space-xs rounded hover:bg-surface-container transition-colors">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded bg-tertiary"></span>
                            <span class="font-label-md text-label-md text-on-surface">Netflix Games</span>
                        </div>
                        <div class="flex items-center gap-space-sm">
                            <span class="font-label-md text-label-md text-on-surface font-bold">10%</span>
                            <span class="font-body-sm text-body-sm text-outline">48M hrs</span>
                        </div>
                    </div>
                    <div class="flex items-center justify-between p-space-xs rounded hover:bg-surface-container transition-colors">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded bg-secondary-container"></span>
                            <span class="font-label-md text-label-md text-on-surface">Especiales Directo</span>
                        </div>
                        <div class="flex items-center gap-space-sm">
                            <span class="font-label-md text-label-md text-on-surface font-bold">4%</span>
                            <span class="font-body-sm text-body-sm text-outline">20M hrs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Netflix Games Pulse Micro-panel -->
        <div class="bg-surface-container-low p-gutter rounded-xl shadow-md flex flex-col gap-space-sm">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <span class="material-symbols-outlined text-tertiary text-[20px]">sports_esports</span>
                    <span class="font-label-md text-label-md text-on-surface font-bold uppercase tracking-wider">Métricas Gaming Cloud &amp; Mobile</span>
                </div>
                <span class="font-badge-spec text-badge-spec bg-tertiary-container/30 text-tertiary px-2 py-0.5 rounded uppercase">Alta Demanda</span>
            </div>
            <div class="grid grid-cols-2 gap-space-sm pt-space-xs">
                <div class="bg-surface-container p-space-sm rounded-lg flex flex-col">
                    <span class="font-body-sm text-body-sm text-outline">Instalaciones App</span>
                    <span class="font-headline-md text-headline-md text-on-surface mt-0.5">24.2M</span>
                    <span class="text-secondary font-label-sm text-label-sm flex items-center gap-0.5 mt-1">
<span class="material-symbols-outlined text-[14px]">north_east</span> +18.4%
            </span>
                </div>
                <div class="bg-surface-container p-space-sm rounded-lg flex flex-col">
                    <span class="font-body-sm text-body-sm text-outline">Cloud Streaming Hrs</span>
                    <span class="font-headline-md text-headline-md text-on-surface mt-0.5">14.6M</span>
                    <span class="text-tertiary font-label-sm text-label-sm flex items-center gap-0.5 mt-1">
<span class="material-symbols-outlined text-[14px]">devices</span> Latencia: 18ms
            </span>
                </div>
            </div>
            <div class="flex items-center justify-between pt-1 text-outline font-body-sm text-body-sm">
                <span>Top títulos: GTA San Andreas, Hades, Stranger Things: 1984</span>
            </div>
        </div>
    </div>
</div>
