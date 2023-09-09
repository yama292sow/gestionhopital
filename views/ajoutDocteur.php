<?php require_once("partiels/theme/header.php"); ?>

<div class="row justify-content-center mt-n5">
    <div class="col-md-6">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-8">
                        <h4>Formulaire d'<?php if (isset($d)) : ?>edition<?php else : ?>ajout <?php endif; ?> docteur</h4>
                    </div>
                    <div class="col-md-4 text-md-right">
                        <a href="?page=docteur" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <?php if (isset($d)) : ?>
                        <input type="hidden" name="id" value="<?= $d->idDocteur ?>">
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="">Nom <span class="text-danger">*</span></label>
                        <input type="text" name="nom" value="<?= isset($d) ? $d->nom : ''  ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Specialisation <span class="text-danger">*</span></label>
                        <input type="text" name="specialisation" value="<?= isset($d) ? $d->specialisation : ''  ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Tel <span class="text-danger">*</span></label>
                        <input type="tel" name="tel" value="<?= isset($d) ? $d->tel : ''  ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" value="<?= isset($d) ? $d->email : ''  ?>" required class="form-control">
                    </div>
                    <?php if (isset($d)) : ?>
                        <button type="submit" name="modifier" class="btn btn-outline-warning">Modifier</button>
                    <?php else : ?>
                        <button type="submit" name="ajouter" class="btn btn-outline-success">Ajouter</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("partiels/theme/footer.php"); ?>