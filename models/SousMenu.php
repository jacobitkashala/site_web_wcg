<?php
class SousMenu{
    // Connexion
    private $connexion;

    public $id;
    public $title;

    // /**
    //  * Constructeur avec $db pour la connexion à la base de données
    //  *
    //  * @param $db
    //  */
    public function __construct($db){
        $this->connexion = $db;
    }
    // public function __construct($id,$title){
    //     $this->$title = $title;
    //     $this->$id = $id;
    // }

    // /**
    //  * Lecture des Rubrique
    //  *
    //  * @return void
    //  */
    /*
    print("PDO::FETCH_OBJ: ");
print("Retourne la ligne suivante en tant qu'objet anonyme ayant les noms de colonnes comme propriétés\n");
$result = $sth->fetch(PDO::FETCH_OBJ);
*/ 
    public function getSousMenu($idMenu){
        // On écrit la requête
        $sql ="SELECT sous_rubrique.SRU_ID as id, SRU_TITRE  as title 
        FROM sous_rubrique 
        INNER JOIN status   ON status.STA_ID = sous_rubrique.STA_ID 
        WHERE sous_rubrique.RUB_ID = 2 AND sous_rubrique.STA_ID =1
        ORDER BY SRU_ORDRE";

        // On prépare la requête
        $query = $this->connexion->prepare($sql);

        // On exécute la requête
        $query->execute();

        // On retourne le résultat
         // on récupère la ligne
         $row = $query->fetch(PDO::FETCH_ASSOC);

         // On hydrate l'objet
         $this->id = $row['id'];
         $this->title = $row['title'];
    }
  

}