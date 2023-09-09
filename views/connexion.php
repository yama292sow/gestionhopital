<?php require_once("partiels/entete.php"); ?>

<body class="bg-success">

    <div class="container">
        <div class="card c">
            <div class="card-head c1 mt-5">
                <div class="row">
                    <div class="col-md-8 ml-5">
                        <p> Bienvenue à Sunu Hopital</p>
                    </div>
                    <div class="col-md-2">
                        <a href="index.php" class="btn btn-outline-success">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body c2 mb-5">
                <form action="" method="POST">
                    <div class="form-group">
                        <input class="form-control input" type="email" name="email" placeholder="sunucode@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <input class="form-control input" type="password" name="mdp" placeholder="....." required />
                    </div>
                    <div class="form-group">
                        <button type="submit" class="form-control input btn btn-success" name="connecter">Se connecter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once("partiels/pied.php"); ?>