<?php require_once("partiels/entete.php"); ?>

<?php require_once("partiels/theme/header.php"); ?>
<div class="container">

    <?php if (count($rv) !== 0) { ?>

        <div class="card" style="text-align: center; font-size: 20px; margin: auto;">
            <div class="card-header bg-gradient-success">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="text-white" style="text-align: left;">Liste des Rendez-vous Trouvés</h3>
                    </div>

                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Tel</th>
                            <th>Adresse Email</th>
                            <th>Docteur</th>
                            <th>Date</th>
                            <th>heure</th>
                            <th>statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($rv as $r) : ?>
                            <tr>
                                <td><?= $r->nom ?></td>
                                <td><?= $r->tel ?></td>
                                <td><?= $r->email ?></td>
                                <td><?= $r->idDocteur ?></td>
                                <td><?= date("d/m/Y", strtotime($r->daterv)) ?></td>
                                <td><?= $r->heure ?></td>
                                <td>
                                    <?php if($r->statut == 0): ?>
                                                <span class="badge badge-info">Nouvelle</span> 
                                    <?php elseif($r->statut == 1): ?>
                                                <span class="badge badge-success">Validée</span> 
                                    <?php else: ?>
                                                <span class="badge badge-danger">Rejetée</span> 
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; ?>



                    </tbody>
                </table>
            </div>
        </div>
    <?php } else {
        echo "<h1>Aucun rendez-vous trouvés</h1>";
    } ?>
</div>

<?php require_once("partiels/theme/footer.php"); ?>