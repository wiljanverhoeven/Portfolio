<?php
require_once './app/model/PortfolioPageModel.php';

class PortfolioPageController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
  
        $portfolioModel = new PortfolioPageModel($this->pdo);

        // fetch selected category
        $categorie = isset($_GET['categorie']) ? htmlspecialchars($_GET['categorie']) : null;

        // Fetch projects
        $projects = $portfolioModel->getProjects($categorie);

        include './app/views/portfoliopage.php';
    }
}
