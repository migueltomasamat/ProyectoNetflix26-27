<?php
    include_once "app/Views/frontend/template/frontend.header.php";
?>
    <main class="w-full pt-16 bg-surface min-h-[calc(100vh-16rem)]">
    <div class="flex flex-col w-full relative select-none">
<?php
include_once "app/Views/frontend/template/frontend.banner.php";
include_once "app/Views/frontend/template/frontend.buttons.php";
?>
    <div class="flex flex-col gap-space-2xl w-full pb-space-2xl">

        <?php
        include_once "app/Views/frontend/template/frontend.watching.php";
        include_once "app/Views/frontend/template/frontend.videogames.php";
        ?>
    </div>
<?php
//include_once "app/Views/frontend/template/frontend.endmain.php";
include_once "app/Views/frontend/template/frontend.footer.php";

