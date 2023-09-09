<?php require_once("partiels/entete.php"); ?>
<?php require_once("partiels/theme/header.php"); ?>
<div class="container-fluid">
    <div class="container">
        <div class="row">

            <div class="col-md-8">
                <div class="card pl-2 pr-2">
                    <div class="card-head bg-gradient-success text-white">
                        <p class="pl-4 pt-2">Information Docteur</p>
                    </div>

                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <?php if (isset($d)) : ?>
                                    <input type="hidden" name="id" value="<?= $d->idDocteur ?>">
                                <?php endif; ?>
                                <div class="form-group col-md-6">
                                    <label for="">Nom <span class="text-danger">*</span></label>
                                    <input type="text" name="nom" value="<?= $_SESSION['user']->nom   ?>" placeholder="Enter votre nom complet" required class="form-control">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>N° Telephone</label><sup>*</sup><br>
                                    <input class="form-control" type="tel" value="<?= $_SESSION['user']->tel ?>" name="tel" placeholder="Enter votre numero telephone" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Email</label><sup>*</sup><br>
                                    <input class="form-control" type="email" value="<?= $_SESSION['user']->email ?>" name="email" placeholder="Enter votre email" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Specialisation</label><sup>*</sup><br>
                                    <input class="form-control" type="text" value="<?= $_SESSION['user']->specialisation ?>" name="specialisation" placeholder="Enter votre specialisation" required />
                                </div>

                            </div>
                            <button name="modifie" class="btn btn-outline-success">Modifier</button>
                        </form>
                    </div>

                </div>

            </div>

            <div class="col-md-4">
                <div class="card pl-2 pr-2">
                    <div class="card-head bg-gradient-success text-white">
                        <p class="pl-4 pt-2">Modification de Mot de passe</p>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Ancien Mot de Passe</label><sup>*</sup><br>
                                    <input class="form-control" type="password" name="mdp_anc" placeholder="Enter votre ancien mot de passe" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Nouveau Mot de Passe</label><sup>*</sup><br>
                                    <input class="form-control" type="password" name="mdp" placeholder="Enter le nouveau mot de passe" required />
                                </div>
                            </div>
                            <button name="modifier" class="btn btn-success">Modifier</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php require_once("partiels/theme/footer.php"); ?>