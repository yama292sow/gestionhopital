<?php
// connexion avec la base de données
try {
    $db = new PDO("mysql:dbname=hopital;host=localhost", "root", "");
} catch (PDOException $e) {
    die("erreur :" . $e->getMessage());
}

function connexion($email, $mdp)
{
    global $db;
    try {
        $rq = $db->prepare(" SELECT * FROM docteur WHERE email = :email AND mdp= :mdp");

        $rq->execute([
            "email" => $email,
            "mdp" => $mdp,
        ]);
        return $rq->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}

//rv par statut et par docteur
function getRvByStatut($statut)
{
    global $db;
    try {
        $rq = $db->prepare("SELECT *  FROM appointment WHERE idDocteur=:id AND statut=:statut");
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}



function deleteDocteur($id)
{
    global $db;
    try {
        $rq = $db->prepare("DELETE FROM docteur WHERE idDocteur =:id");
        return $rq->execute([
            'id' => $id
        ]);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}

function editDocteur($id, $nom, $specialisation, $tel, $email)
{
    global $db;
    try {
        $rq = $db->prepare("UPDATE docteur SET nom = :nom, specialisation =:specialisation, tel =:tel,
            email =:email
            WHERE idDocteur = :id");
        return $rq->execute([
            "nom" => $nom,
            "specialisation" => $specialisation,
            "tel" => $tel,
            "email" => $email,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

function editDocteurByMdp($id, $mdp)
{
    global $db;
    try {
        $rq = $db->prepare("UPDATE docteur SET mdp = :mdp
            WHERE idDocteur = :id");
        return $rq->execute([
            "mdp" => $mdp,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

function selectDocteurByMdp($id, $mdp)
{
    global $db;
    try {
        $rq = $db->prepare("SELECT * FROM docteur
            WHERE idDocteur = :id and mdp = :mdp");
        $rq->execute([
            "mdp" => $mdp,
            "id" => $id
        ]);
        return $rq->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

function getDocteurById($id)
{
    global $db;
    try {
        $rq = $db->prepare("SELECT * FROM docteur WHERE idDocteur = :id");
        $rq->execute([
            "id" => $id
        ]);

        return $rq->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}

// function getRvByTel()
// {
//     global $db;
//     try {
//         $rq = $db->prepare("SELECT * FROM appointment  WHERE tel = :tel");
//         $rq->execute();
//         return $rq->fetch(PDO::FETCH_OBJ);
//     } catch (PDOException $e) {
//         die("Erreur : " . $e->getMessage());
//     }
// }


function getAllDocteur()
{
    global $db;
    try {
        $rq = $db->prepare("SELECT * FROM docteur ORDER BY idDocteur DESC");
        $rq->execute();

        return $rq->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}

function addDocteur($nom, $specialisation, $tel, $email, $mdp)
{
    global $db;
    try {
        $rq = $db->prepare("INSERT INTO docteur (nom, specialisation, tel, email, mdp) VALUES (:nom, :specialisation, :tel, :email, :mdp)");
        return $rq->execute([
            "nom" => $nom,
            "specialisation" => $specialisation,
            "tel" => $tel,
            "email" => $email,
            "mdp" => $mdp,
        ]);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}

function getAllRev($statut)
{
    global $db;
    try {
        $rq = $db->prepare("SELECT  r.id as id,r.nom as nom,r.tel as tel,r.email as email,d.nom as nomDocteur,daterv,heure ,r.statut
        FROM appointment r, docteur d
        WHERE d.idDocteur = r.idDocteur and r.statut= :statut");
        $rq->execute(
            [
                "statut" => $statut
            ]

        );

        return $rq->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}
// ajout reservation
function addRv($nom, $tel, $email, $iDdocteur, $daterv, $heure, $message, $statut)
{
    global $db;
    try {
        $rq = $db->prepare("INSERT INTO appointment (nom,tel,email,idDocteur,daterv,heure,message,statut) VALUES (:nom,:tel,:email,:idDocteur,:daterv,:heure, :message,:statut)");
        return $rq->execute([
            "nom" => $nom,
            "tel" => $tel,
            "email" => $email,
            "idDocteur" => $iDdocteur,
            "daterv" => $daterv,
            "heure" => $heure,
            "message" => $message,
            "statut" => $statut
        ]);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}

function editReservation($id, $nom, $tel, $email, $idDocteur, $daterv, $heure, $message)
{
    global $db;
    try {
        $rq = $db->prepare("UPDATE appointment SET nom = :nom, tel =:tel, email =:email,
            idDocteur =:idDocteur,daterv =:daterv,heure= :heure,message= :message
            WHERE id = :id");
        return $rq->execute([
            "nom" => $nom,
            "tel" => $tel,
            "email" => $email,
            "idDocteur" => $idDocteur,
            "daterv" => $daterv,
            "heure" => $heure,
            "message" => $message,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
function editRvByStatut($id, $statut)
{
    global $db;
    try {
        $rq = $db->prepare("UPDATE appointment SET statut = :statut
            WHERE id = :id");
        return $rq->execute([
            "statut" => $statut,
            "id" => $id
        ]);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
function deleteRv($id)
{
    global $db;
    try {
        $rq = $db->prepare("DELETE FROM appointment WHERE id =:id");
        return $rq->execute([
            'id' => $id
        ]);
    } catch (PDOException $e) {
        die("erreur :" . $e->getMessage());
    }
}
function getReservationById($id)
{
    global $db;
    try {
        $rq = $db->prepare("SELECT  r.id as id,r.nom as nom,r.tel as tel,r.email as email,d.idDocteur as idDocteur,daterv,heure ,r.statut as statut
        FROM appointment r, docteur d
        WHERE d.idDocteur = r.idDocteur and r.id = :id");
        $rq->execute([
            "id" => $id
        ]);

        return $rq->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur : " . $e->getMessage());
    }
}
function selectRv($tel)
{
    global $db;
    try {
        $q = $db->prepare("SELECT *  FROM appointment WHERE  tel=:tel");
        $q->execute([
            "tel" => $tel
        ]);
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $pre) {
        die("Erreur : " . $pre->getMessage());
    }
}
function rvNouveau()
{
    global $db;
    try {
        $q = $db->prepare("SELECT *  FROM appointment WHERE  statut= 0");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $pre) {
        die("Erreur : " . $pre->getMessage());
    }
}
function rvApprouve()
{
    global $db;
    try {
        $q = $db->prepare("SELECT *  FROM appointment WHERE  statut= 1");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $pre) {
        die("Erreur : " . $pre->getMessage());
    }
}
function rvRejet()
{
    global $db;
    try {
        $q = $db->prepare("SELECT *  FROM appointment WHERE  statut= 2");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $pre) {
        die("Erreur : " . $pre->getMessage());
    }
}
function rvTotal()
{
    global $db;
    try {
        $q = $db->prepare("SELECT *  FROM appointment");
        $q->execute();
        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $pre) {
        die("Erreur : " . $pre->getMessage());
    }
}