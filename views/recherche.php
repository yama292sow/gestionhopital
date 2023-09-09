<?php require_once("partiels/entete.php"); ?>

<?php require_once("partiels/theme/header.php"); ?>


<section>
    <h2 id="search">Rechercer L'historique Des Rendez-vous Par Numero <br> De Telephone Portable</h2>
    <div class="mr-3 ml-5 mt-5">
        <form method="post" class="form-inline">
            <input class="form-control mr-sm-2 mr-1" name="tel" style="width: 80%;  height: 50px;" type="search" placeholder="l'historique des recherches" aria-label="Search">
            <button class="btn btn-outline-white bg-success my-2 my-sm-2" name="recherche" style=" height: 50px; color: white; font-size: 25px;" type="submit">Recherche</button>
        </form>

    </div><br><br>
</section>

<?php if (isset($rv)) : ?>
    <?php require_once("rvretrouve.php") ?>
<?php endif; ?>

<?php require_once("partiels/theme/footer.php"); ?>