<?php
class Article extends Database {
    private $id = 0;
    private $textes = null;
    private $id_utilisateurs = null;


public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }
    public function getTextes()
    {
        return $this->textes;
    }
    public function setTextes($textes)
    {
        return $this->textes = $textes;
    }
    public function getId_utilisateurs()
    {
        return $this->id_utilisateurs;
    }
    public function setId_utilisateurs($id_utilisateurs)
    {
        return $this->id_utilisateurs = $id_utilisateurs;
    }

    
    public function requete(){

        $insert = $this->pdo->prepare("INSERT INTO articles (textes,id_utilisateurs)
        VALUES(?,?) ");

        $insert->bindValue(1, $this->textes, PDO::PARAM_STR);
        $insert->bindValue(2, $this->id_utilisateurs, PDO::PARAM_INT);
        $insert->execute();
    }
    public function affichage(){
        // $afftexte = $this->pdo->prepare("SELECT textes,pseudo,avatar FROM articles INNER JOIN utilisateurs ON id_utilisateurs = utilisateurs.id");
        // $afftexte->execute();
        // return $afftexte->fetchAll(PDO::FETCH_ASSOC);
        $requet = $this->pdo->query("SELECT articles.id,textes,avatar, pseudo  FROM articles LEFT JOIN utilisateurs ON id_utilisateurs = articles.id");
        return $requet->fetchAll(PDO::FETCH_ASSOC);
        

    }
}
