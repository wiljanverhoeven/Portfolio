<?php
class PortfolioModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getProjects($categorie = null) {
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
