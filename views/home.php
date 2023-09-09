<?php require_once("partiels/entete.php"); ?>

<body>
    <div id="scroll-top">
        <a href="#acceuil" class="text-white">Haut</a>
    </div>
    <section id="navbar">
        <nav class="navbar navbar-expand-lg navbar-dark bg-success">
            <a class="navbar-brand" href="#">Sunu<span class="text-warning">Hopital</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link " href="">Accueil <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#propos">Apropos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#recherche">Recherche</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#galeries">Galeries</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#form">Reservations</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=login">Connexion</a>
                    </li>
                </ul>

            </div>
        </nav>
    </section>
    <section id="acceuil">
        <div class="container-fluid" id="bg">

            <div class="row">
                <div class="col-md-12">
                    <img src="images/image2.jpg">
                </div>
            </div>
        </div>
    </section>
    <section id="propos">
        <div class="container-fluid mt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h3 class="h3">A Propos De Nous</h3>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae debitis id, nam, exercitationem, dignissimos dolor illo velit ducimus itaque ullam nihil eius labore atque temporibus. Enim vero culpa dolores sed tempore earum laudantium beatae aperiam aut nobis esse obcaecati minima autem, deleniti laboriosam dolorum, tenetur sunt ut! Vel voluptatum repellendus, dicta assumenda officiis recusandae! Odio explicabo minus ab dolorum repellendus quos illo soluta, cupiditate quo laborum sed voluptatum, quibusdam tenetur nisi architecto. Praesentium aut blanditiis odio, modi dolore velit hic?</p>
                    </div>
                    <div class="col-md-2 ">
                    </div>
                    <div class="col-md-4 text-success">
                        <div class="cercle p-5 ">
                            <h2><strong style="font-size:70px;">12</strong><b>ans d'Experiences</b></h2>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="recherche">
        <div class="container-fluid mt-5">
            <div class="container">
                <div class="row">
                    <h3 class="h3 mt-5 mb-4">Rechercher L'historique Des Rendez-vous Par Numero De Telephone Portable</h3>
                </div>

                <form method="post">
                    <div class="row">
                        <div class="col-md-10">
                            <input class="form-control" type="search" name="tel" placeholder="L'historique de Rendez-vous par numero telphone">
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-success text-white" name="recherche" type="submit">Rechercher</button>
                        </div>
                    </div>
                </form>
                <br>
            </div>
        </div>
    </section>
    <div class="container">
        <?php if (isset($_POST["recherche"])) {
            if (count($reservation) !== 0) { ?>
                <div class="card" style="text-align: center; font-size: 20px; margin: auto;">
                    <div class="card-header bg-success ">
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
                                <?php foreach ($reservation as $rv) : ?>
                                    <tr>
                                        <td><?= $rv->nom ?></td>
                                        <td><?= $rv->tel ?></td>
                                        <td><?= $rv->email ?></td>
                                        <td><?= $rv->idDocteur ?></td>
                                        <td><?= date("d/m/Y", strtotime($rv->daterv)) ?></td>
                                        <td><?= $rv->heure ?></td>
                                        <td>
                                            <?php if($rv->statut == 0): ?>
                                                <span class="badge badge-info">Nouvelle</span> 
                                            <?php elseif($rv->statut == 1): ?>
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

                echo "<h1>Aucun Rendez-vous Trouvés</h1>";
            }
        } ?>
    </div>



    <section id="galeries">
        <div class="container-fluid mt-5">
            <div class="container">
                <h3 class="h3 mb-5">Nos Galeries</h3>
                <div class="row mt-2">
                    <div class="col-md-5">
                        <img src="images/p1.jpg">
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
                        <img src="images/p8.jpg">
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-md-5">
                        <img src="images/p6.jpg">
                    </div>
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
                        <img src="images/p7.jpg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="form">
        <div class="container-fluid mt-5">
            <div class="container">
                <div class="card">
                    <div class="card-head">
                        <h3 class="h3">Prendre Une Reservation</h3>
                        <?php if (isset($_POST["ajouter"])) { ?>
                            <div class="bg-success text-white p-2">
                                <h4>Votre réservation a été bien enregistrée...</h4>
                            </div>

                        <?php } ?>
                    </div>
                    <div class="card-body">
                        <form action="index.php" method="POST">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Nom complet</label><sup>*</sup><br>
                                    <input class="form-control" type="text" name="nom" placeholder="Enter votre nom complet" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email</label><sup>*</sup><br>
                                    <input class="form-control" type="email" name="email" placeholder="Enter votre email" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>N° Telephone</label><sup>*</sup><br>
                                    <input class="form-control" type="tel" name="tel" placeholder="Enter votre numero telephone" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Date</label><sup>*</sup><br>
                                    <input class="form-control" type="date" name="daterv" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Heure</label><sup>*</sup><br>
                                    <input class="form-control" type="time" name="heure" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Docteur</label><sup>*</sup><br>
                                    <select name="idDocteur" id="" class="form-control">
                                        <option value="">Selectionner un docteur </option>
                                        <?php foreach ($docteurs as $doc) : ?>
                                            <option value="<?= $doc->idDocteur ?>"><?= $doc->nom ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label>Symptômes</label><br>
                                    <textarea class="form-control" name="message">

                                    </textarea>
                                </div>
                            </div>
                            <button name="ajouter" class="btn btn-outline-success">Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="contact">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-4">
                    <h3 class="h3">Ouverture</h3>
                    <pre>    7j/7<br>   24h/24 </pre>
                </div>
                <div class="col-md-4">
                    <h3 class="h3">Contact</h3>
                    <pre>    Email:<br>sunuhopital@gmail.com<br>     Tel: </pre>
                </div>
                <div class="col-md-4">
                    <h3 class="h3">Adresse</h3>
                    <pre>    PA U.17<br>  EN FACE<br>TERMINUS 227: </pre>
                </div>
            </div>
        </div>
    </section>
    <section id="footer" class="container-fluid bg-success p-1 text-dark">
        <footer>
            <div class="row">
                <div class="col-md-9">
                    <h6>&copy;2023| tout dois reserver à sunuHopital</h6>
                </div>
                <div class="col-md-3">
                    <h6>Conçu avec coeur par <span class="text-warning"> sunuCode</span></h6>
                </div>
            </div>
        </footer>
    </section>

    <?php require_once("partiels/pied.php"); ?>