<main class="relative pt-16 w-full px-margin-tablet bg-background min-h-screen">
    <div class="flex flex-col w-full pb-space-2xl gap-y-space-xl">
        <!-- Executive Header -->
        <div class="flex flex-col xl:flex-row xl:items-end justify-between gap-gutter pb-space-lg bg-gradient-to-b from-surface-container-low/40 to-transparent p-gutter rounded-xl">
            <div class="flex flex-col gap-space-xs max-w-3xl">
                <div class="flex items-center gap-space-xs text-primary-container font-label-sm text-label-sm uppercase tracking-widest">
                    <span class="w-2 h-2 rounded-full bg-primary-container animate-ping"></span>
                    <span>Métricas En Vivo • Servidor Principal</span>
                </div>
                <h1 class="font-headline-xl text-headline-xl text-on-surface tracking-tight">
                    <?=$titulo??'Vista general'?>
                </h1>
                <p class="font-body-md text-body-md text-outline">
                    <?=$descripcion?>
                </p>
            </div>
            <!-- Executive Controls -->
            <div class="flex flex-wrap items-center gap-space-sm">
                <div class="relative flex items-center bg-surface-container rounded-lg p-1">
                    <button class="px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors"
                            id="range-7d" onclick="setActiveRange('7d')">Esta semana
                    </button>
                    <button class="px-space-sm py-1.5 rounded font-label-md text-label-md bg-surface-container-highest text-on-surface shadow-sm"
                            id="range-30d" onclick="setActiveRange('30d')">Últimos 30 días
                    </button>
                </div>
                <div class="relative flex items-center bg-surface-container rounded-lg px-space-sm py-1.5">
                    <span class="material-symbols-outlined text-[18px] text-outline mr-1.5">public</span>
                    <select class="bg-transparent text-on-surface font-label-md text-label-md outline-none cursor-pointer pr-space-xs">
                        <option class="bg-surface-container-high text-on-surface" value="global">Global (Todos)
                        </option>
                        <option class="bg-surface-container-high text-on-surface" value="latam">LATAM</option>
                        <option class="bg-surface-container-high text-on-surface" value="emea">EMEA</option>
                        <option class="bg-surface-container-high text-on-surface" value="na">Norteamérica</option>
                        <option class="bg-surface-container-high text-on-surface" value="apac">Asia-Pacífico
                        </option>
                    </select>
                </div>
                <button class="flex items-center gap-space-xs bg-surface-container hover:bg-surface-container-high text-on-surface px-space-md py-2 rounded-lg font-label-md text-label-md shadow-sm transition-all hover:scale-[1.02] active:scale-[0.98]">
                    <span class="material-symbols-outlined text-[18px] text-primary">download</span>
                    <span>Exportar Informe CSV / PDF</span>
                </button>
            </div>
        </div>