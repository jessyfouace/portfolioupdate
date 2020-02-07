<?php
include("template/header.php"); ?>
<div style="overflow-x: hidden;">
    <div class="col-12 m-0 p-0 text-center mb-3 mt-3">
        <a href="?addProjet=true" class="p-2 text-danger sizelink">
            Ajouter un Projet
        </a>
        <a href="?editProjet=true" class="p-2 text-danger sizelink">
            Editer un Projet
        </a>
        <a href="?viewMessage=true" class="p-2 text-danger sizelink">
            Voir les Messages
        </a>
    </div>

    <?php if (isset($_GET['addProjet'])) {
        echo "add";
    } else if (isset($_GET['editProjet'])) {
        echo "edit";
    } else if (isset($_GET['viewMessage'])) { ?>
        <div class="container text-center mx-auto col-12" style="overflow-y:hidden;">
            <div class="row">
                <div class="span5 mx-auto col-12">
                    <table class="table table-striped table-condensed">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nom</th>
                                <th>Prénom</th>
                                <th>Mail</th>
                                <th>Voir</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $arrayLength = count($allMessages);
                            if ($arrayLength >= 1) {
                                foreach ($allMessages as $message) { ?>
                                    <tr>
                                        <td><?= $message->getIdMessage() ?></td>
                                        <td><?= $message->getFirstName() ?></td>
                                        <td><?= $message->getLastName() ?></td>
                                        <td><?= $message->getMail() ?></td>
                                        <td><a href="<?= $url ?>pannel?viewDetailMessage=<?= $message->getIdMessage() ?>" class="btn btn-primary">Voir</a></td>
                                    </tr>
                            <?php }
                            } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php } else if (isset($_GET['viewDetailMessage'])) { ?>
        <div class="col-12 col-md-8 p-3 mx-auto bg-index" style="border-radius: 5px;">
            <?php
            $arrayLength = count($messageById);
            if ($arrayLength >= 1) {
                foreach ($messageById as $message) { ?>
                    <h1 class="text-success" style="word-wrap:break-word;"><?= $message->getFirstName() . ' ' . $message->getLastName(); ?></h1>
                    <h2 class="text-primary" style="word-wrap:break-word;"><?= $message->getMail(); ?></h2>
                    <p class="text-white" style="word-wrap:break-word;"><?= $message->getMessage(); ?></p>
                    <form action="pannel?viewMessage=true" method="post">
                        <input type="hidden" name="idMessage" value="<?= $message->getIdMessage(); ?>">
                        <input type="submit" value="Supprimer" class="btn btn-danger">
                    </form>
                <?php }
            } else { ?>
                <h3 class="text-danger text-center">CE MESSAGE N'EXISTE PLUS</h3>
            <?php } ?>
        </div>
    <?php } ?>
</div>
<?php
include("template/footer.php"); ?>