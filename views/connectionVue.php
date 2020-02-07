<?php
include("template/header.php"); ?>

<div class="bg-index d-flex" style="height: 67.5vh; overflow-x: hidden;">
    <form id="formContact" action="connection" method="POST" class="col-11 mx-auto row">
        <div class="col-11 col-md-5 mx-auto my-auto m-0 p-0 colorwhite mt-2">
            <input class="effect-1 col-12 m-0 bg-form text-white" style="height: 50px;" id="inputFirstName" type="email" name="mail" placeholder="E-mail" required>
            <span class="focus-border"></span>
        </div>
        <div class="col-11 col-md-5 mx-auto my-auto m-0 p-0 colorwhite mt-2">
            <input class="effect-1 col-12 m-0 bg-form text-white" style="height: 50px;" id="inputLastName" type="password" name="password" placeholder="Mot de Passe" required>
            <span class="focus-border"></span>
        </div>
        <div class="col-12 m-0 p-0 mx-auto text-center">
            <input class="mx-auto btn btn-perso" type="submit" name="send" value="Connection">
        </div>
    </form>
</div>

<?php
include("template/footer.php"); ?>