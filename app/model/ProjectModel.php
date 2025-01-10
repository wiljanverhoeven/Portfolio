<?php
require_once '../dbconnect.php'; // Include the database connection

class ProjectModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getProjectById($projectId) {
        $stmt = $this->pdo->prepare("SELECT * FROM projecten WHERE idportfolios = :idportfolios");
        $stmt->bindParam(':idportfolios', $projectId, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>
