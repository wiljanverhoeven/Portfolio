<?php
require_once './app/model/PortfolioPageModel.php';

class PortfolioPageController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        // Initialize the model
        $portfolioModel = new PortfolioPageModel($this->pdo);

        // Get the selected category from the GET parameters, if available
        $categorie = isset($_GET['categorie']) ? htmlspecialchars($_GET['categorie']) : null;

        // Fetch projects, optionally filtered by category
        $projects = $portfolioModel->getProjects($categorie);

        // Include the portfolio view and pass the $projects data
        include './app/views/portfoliopage.php';
    }
}
