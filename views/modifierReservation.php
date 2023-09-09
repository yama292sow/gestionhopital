<?php require_once("partiels/entete.php"); ?>
<?php require_once("partiels/theme/header.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="card ca">
            <div class="card-header py-3 bg-gradient-success">
                <div class="row">
                    <div class="col-md-8 pl-5">
                        <h6 class="m-0 font-weight-bold text-white ">Formulaire rendez-vous</h6>
                    </div>
                    <div class="col-md-4 pl-5">
                        <?php if ($v->statut == 0) : ?>
                            <a href="?page=rv&type=nouveaux" class="btn btn-warning">Retour</a>
                        <?php endif; ?>
                        <?php if ($v->statut == 1) : ?>
                            <a href="?page=rv&type=approuves" class="btn btn-warning">Retour</a>
                        <?php endif; ?>
                        <?php if ($v->statut == 2) : ?>
                            <a href="?page=rv&type=rejetes" class="btn btn-warning">Retour</a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="row">
                        <?php if (isset($v)) : ?>
                            <input type="hidden" name="id" value="<?= $v->id ?>">
                        <?php endif; ?>
                        <div class="form-group col-md-6">
                            <label>Nom complet</label><sup>*</sup><br>
                            <input class="form-control" type="text" value="<?= isset($v) ? $v->nom : "" ?>" name="nom" placeholder="Enter votre nom complet" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label><sup>*</sup><br>
                            <input class="form-control" type="email" value="<?= isset($v) ? $v->email : "" ?>" name="email" placeholder="Enter votre email" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>N° Telephone</label><sup>*</sup><br>
                            <input class="form-control" type="tel" value="<?= isset($v) ? $v->tel : "" ?>" name="tel" placeholder="Enter votre numero telephone" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Date</label><sup>*</sup><br>
                            <input class="form-control" type="date" value="<?= isset($v) ? $v->daterv : "" ?>" name="daterv" required />
                        </div>
                        <div class="form-group col-md-6">
                            <label>Heure</label><sup>*</sup><br>
                            <input class="form-control" type="time" value="<?= isset($v) ? $v->heure : "" ?>" name="heure" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Docteur</label><sup>*</sup><br>
                            <select name="idDocteur" value="<?= isset($v) ? $v->idDocteur : "" ?>" class="form-control" required>
                                <option value="">selectionner un docteur</option>
                                <?php foreach ($docteurs as $doc) : ?>
                                    <option value="<?= $doc->idDocteur ?>"><?= $doc->nom ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Symptômes</label><br>
                            <textarea class="form-control" value="<?= isset($v) ? $v->message : "" ?>" name="message">

                                    </textarea>
                        </div>
                    </div>
                    <button name="modifier" class="btn btn-outline-success">Modifier</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once("partiels/theme/footer.php"); ?>