<?php

    include_once "app/Views/backend/new_template/backend.head.php";
    include_once "app/Views/backend/new_template/backend.aside.php";
    include_once "app/Views/backend/new_template/backend.header.php";
    include_once "app/Views/backend/new_template/backend.executiveinfo.php";
?>

    <div class="flex flex-col bg-surface-container-low rounded-xl shadow-xl overflow-hidden">
        <!-- Header with Tabs and New Title Action -->
        <div class="p-gutter flex flex-col lg:flex-row lg:items-center justify-between gap-gutter bg-surface-container">
            <div class="flex flex-col gap-1">
                <span class="font-headline-md text-headline-md text-on-surface font-bold">Gestión de Usuarios de Netflix</span>
                <span class="font-body-sm text-body-sm text-outline">Creación, modificación y borrado de usuarios del sistema</span>
            </div>
            <div class="flex flex-wrap items-center gap-space-sm">
                <!-- Filter Tabs -->
                <div class="flex items-center bg-surface-container-lowest p-1 rounded-lg">
                    <button class="px-space-sm py-1.5 rounded font-label-md text-label-md bg-surface-container text-on-surface font-semibold shadow-sm transition-colors"
                            id="tab-all" onclick="filterCatalog('all')">
                        Todos (2)
                    </button>
                    <button class="px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors"
                            id="tab-movies" onclick="filterCatalog('movies')">
                        Admin (1)
                    </button>
                    <button class="px-space-sm py-1.5 rounded font-label-md text-label-md text-outline hover:text-on-surface transition-colors"
                            id="tab-series" onclick="filterCatalog('series')">
                        Resto (1)
                    </button>
                </div>
                <!-- Add Button -->
                <button class="flex items-center gap-space-xs bg-primary-container hover:bg-inverse-primary text-on-primary-container px-space-md py-2 rounded-lg font-label-md text-label-md transition-all shadow-md active:scale-95">
                    <span class="material-symbols-outlined text-[18px]">add_box</span>
                    <span>+ Registrar nuevo usuario</span>
                </button>
            </div>
        </div>
        <!-- Table Component -->
        <div class="overflow-x-auto w-full">
            <table class="w-full text-left border-collapse">
                <thead>
                <tr class="bg-surface-container-high/60 text-outline font-label-sm text-label-sm uppercase tracking-wider">
                    <th class="py-space-md px-gutter">Id</th>
                    <th class="py-space-md px-space-md">Nombre</th>
                    <th class="py-space-md px-space-md">Email</th>
                    <th class="py-space-md px-space-md">Fecha de Nacimiento</th>
                    <th class="py-space-md px-space-md">Teléfono</th>
                    <th class="py-space-md px-gutter text-right">Acciones</th>
                </tr>
                </thead>
                <tbody class="divide-y divide-transparent font-body-md text-body-md" id="catalog-table-body">
                <!-- Fila que  tiene que aparecer por cada usuario -->
                <?php
                foreach ($usuarios as $usuario){

                ?>
                <tr class="hover:bg-surface-container transition-colors group" data-category="users">
                    <td class="py-space-md px-space-md text-on-surface"><?=$usuario->getId()?></td>
                    <td class="py-space-md px-space-md text-on-surface"><?=$usuario->getName()?></td>


                    <td class="py-space-md px-space-md text-on-surface"><?=$usuario->getEmail()?></td>

                    <td class="py-space-md px-space-md text-on-surface"><?=$usuario->getBirthDate()->format('Y-m-d')?></td>

                    <td class="py-space-md px-space-md text-on-surface"><?=$usuario->getPhone()?></td>
                    <td class="py-space-md px-gutter text-right">
                        <div class="flex items-center justify-end gap-1 opacity-80 group-hover:opacity-100 transition-opacity">
                            <a href="/user/<?=$usuario->getId()?>/edit"<button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-on-surface transition-colors"
                                    title="Editar">
                                <span class="material-symbols-outlined text-[18px]">edit</span>
                            </button></a>

                            <button class="p-1.5 hover:bg-surface-container-high rounded text-outline hover:text-error transition-colors" onclick="borrar()"
                                    title="Borrar">
                                <span class="material-symbols-outlined text-[18px]">delete</span>
                            </button>
                        </div>
                    </td>

                </tr>
                    <?php } ?>
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
    <script>

        function borrar(){


        }

    </script>




<?php
include_once "app/Views/backend/new_template/backend.health.php";


include_once "app/Views/backend/new_template/backend.footer.php";
