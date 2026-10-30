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
                <span class="font-headline-md text-headline-md text-on-surface font-bold">Creación de un usuario de administración</span>
                <span class="font-body-sm text-body-sm text-outline">Rellenar todos los datos para crear el usuario</span>
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
                <a href="/user/create"><button class="flex items-center gap-space-xs bg-primary-container hover:bg-inverse-primary text-on-primary-container px-space-md py-2 rounded-lg font-label-md text-label-md transition-all shadow-md active:scale-95">
                    <span class="material-symbols-outlined text-[18px]">add_box</span>
                    <span>+ Registrar nuevo usuario</span>
                    </button></a>
            </div>
        </div>
        <!-- Form Component -->
        <div class="overflow-x-auto w-full">
            <div class="bg-dark shadow-md rounded px-8 pt-6 pb-8 mb-4">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="input-name"></label>
                    <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm pl-9 pr-space-md py-space-xs rounded outline-none focus:bg-surface-container-high transition-colors" id="input-name" name="name" type="text" placeholder="Introduce el nombre del usuario" value="<?=$usuario->getName()?>">
                </div>
                <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="input-email"></label>
                <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm pl-9 pr-space-md py-space-xs rounded outline-none focus:bg-surface-container-high transition-colors" id="input-email" name="email" type="email" placeholder="Introduce el correo electrónico del usuario" value="<?=$usuario->getEmail()?>">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="input-password"></label>
                    <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm pl-9 pr-space-md py-space-xs rounded outline-none focus:bg-surface-container-high transition-colors" id="input-password" name="password" type="password" placeholder="Introduzca un valor para modificar o deje en blanco para la misma contraseña">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="input-birthdate"></label>
                    <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm pl-9 pr-space-md py-space-xs rounded outline-none focus:bg-surface-container-high transition-colors" id="input-birthdate" name="birthdate" type="date" placeholder="Introduce la fecha de nacimiento del usuario" value="<?=$usuario->getBirthdate()->format('Y-m-d')?>">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="input-address"></label>
                    <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm pl-9 pr-space-md py-space-xs rounded outline-none focus:bg-surface-container-high transition-colors" id="input-address" name="address" type="text" placeholder="Introduce la dirección del usuario" value="<?=$usuario->getAddress()?>">
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="input-phone"></label>
                    <input class="w-full bg-surface-container text-on-surface placeholder:text-outline font-body-sm text-body-sm pl-9 pr-space-md py-space-xs rounded outline-none focus:bg-surface-container-high transition-colors" id="input-phone" name="phone" type="text" placeholder="Introduce el teléfono del usuario" value="<?=$usuario->getPhone()?>">
                </div>
                <div class="flex items-center justify-between">
                    <button class="flex items-center gap-space-xs bg-primary-container hover:bg-inverse-primary text-on-primary-container px-space-md py-2 rounded-lg font-label-md text-label-md transition-all shadow-md active:scale-95" name="bt_submit" onclick={put()}>Editar Usuario</button>
                    <button class="flex items-center gap-space-xs bg-secondary-container hover:bg-inverse-secondary text-on-primary-container px-space-md py-2 rounded-lg font-label-md text-label-md transition-all shadow-md active:scale-95" name="bt_borrar" onclick={borrar()}>Borrar Usuario </button>
                </div>

            </div>
        </div>

    </div>
    <script>

        function put(){
            const myHeaders = new Headers();
            myHeaders.append('Content-Type', 'application/json');

            const raw = JSON.stringify({
                "name": document.getElementById('input-name').value,
                "email": document.getElementById('input-email').value,
                "password": document.getElementById('input-password').value,
                "address": document.getElementById('input-address').value,
                "birthdate": document.getElementById('input-birthdate').value,
                "phone": document.getElementById('input-phone').value
            });


            const requestOptions = {
                method: "PUT",
                headers: myHeaders,
                body: raw,
                redirect: "follow"
            }

            fetch("http://localhost:8080/user/<?=$usuario->getId()?>",requestOptions)
                .then((response)=>response.text())
                .then((result)=>window.location.replace("http://localhost:8080/user"))
                .catch((error)=>console.error(error));


        }
        function borrar(){

            const requestOptions = {
                method: "DELETE",
                redirect: "follow"
            }

            fetch("http://localhost:8080/user/<?=$usuario->getId()?>",requestOptions)
                .then((response)=>response.text())
                .then((result)=>window.location.replace("http://localhost:8080/user"))
                .catch((error)=>console.error(error));

        }

    </script>




<?php
include_once "app/Views/backend/new_template/backend.health.php";


include_once "app/Views/backend/new_template/backend.footer.php";
