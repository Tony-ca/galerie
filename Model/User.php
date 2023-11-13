<?php
include_once './config/DataBase.php';
require './password_compat-master/lib/password.php';


class User extends Database {

    public function __construct() {
    $this->getConnection();
}
    
    public function Inscription($email, $mdp, $prenom, $nom, $tel) {
        $dbConnect = $this->dbConnect;

        $hashed_password = password_hash($mdp, PASSWORD_ARGON2I);
       
        
        $sql = "INSERT INTO utilisateur (nom, prenom, telephone, email, password) 
                VALUES (:InscriptionNom, :InscriptionPrenom, :inputTelephoneConnexion, :inputInscriptionEmail, :inputInscriptionPassword)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindValue(':inputInscriptionEmail', $email, PDO::PARAM_STR);
        $stmt->bindValue(':inputInscriptionPassword',$hashed_password, PDO::PARAM_STR); 
        $stmt->bindValue(':InscriptionPrenom', $prenom, PDO::PARAM_STR);
        $stmt->bindValue(':InscriptionNom', $nom, PDO::PARAM_STR);
        $stmt->bindValue(':inputTelephoneConnexion', $tel, PDO::PARAM_INT);
        
        
        try {
            $stmt->execute();
            echo "Mise à jour effectuée avec succès.";
            return;
            
        } catch (PDOException $e) {
            echo "Erreur lors de la mise à jour : " . $e->getMessage();
        }
        
        
    }


    function Connexion($email, $mdp){
        $dbConnect = $this->dbConnect;
        
        $query = "SELECT email, password FROM utilisateur WHERE email = :email";
        $stmt = $dbConnect->prepare($query);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    
        if ($row) {
            $hashed_password = $row['password'];
            if (password_verify($mdp, $hashed_password)) {
                echo 'Vous êtes maintenant connecté.';
            } else {
                echo 'Mot de passe incorrect.';
            }
        } else {
            echo 'Identifiant incorrect.';
        }
    }

}

