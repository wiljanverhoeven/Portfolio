<?php
class PortfolioPageModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    //fetches projects from database
    public function getProjects($categorie = null) {
        //checks for applied filter
        if ($categorie) {
            $stmt = $this->pdo->prepare("SELECT * FROM projecten WHERE categorie = :categorie");
            $stmt->bindParam(':categorie', $categorie);
        } else {
            $stmt = $this->pdo->prepare("SELECT * FROM projecten");
        }

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
