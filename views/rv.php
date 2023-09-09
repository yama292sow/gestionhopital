<?php require_once("partiels/entete.php"); ?>
<?php require_once("partiels/theme/header.php"); ?>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-gradient-success">
        <h6 class="m-0 font-weight-bold text-white ">Liste des nouveaux rendez-vous</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Tel</th>
                        <th>Email</th>
                        <th>Docteur</th>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($rv  as $v) : ?>
                        <tr>
                            <td><?= $v->nom ?></td>
                            <td><?= $v->tel ?></td>
                            <td><?= $v->email ?></td>
                            <td><?= $v->nomDocteur ?></td>
                            <td><?= date("d/m/Y", strtotime($v->daterv)) ?></td>
                            <td><?= $v->heure ?></td>



                            <td>
                                <a href="?page=rv&type=edit&id=<?= $v->id ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-eye"></i></a>
                                <?php if ($v->statut == 0) : ?>
                                    <a href="?page=rv&app=<?= $v->id ?>" class="btn btn-outline-success btn-sm"><i class="fa fa-check"></i></a>
                                    <a href="?page=rv&rejet=<?= $v->id ?>" class="btn btn-outline-warning btn-sm"><i class="fa fa-ban"></i></a>
                                <?php endif; ?>

                                <a href="?page=rv&delete=<?= $v->id ?>" class="btn btn-outline-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </a>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>

            </table>
        </div>
    </div>
</div>
<?php require_once("partiels/theme/footer.php"); ?>