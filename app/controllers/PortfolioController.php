<?php
class PortfolioController {
    public function index() {
        // Include the model
        require_once '../database.php';
        require_once '../app/models/PortfolioModel.php';

        // Check for filter input
        $categorie = isset($_GET['categorie']) ? htmlspecialchars($_GET['categorie']) : null;

        // Get projects from the model
        $projects = $model->getProjects($categorie);

        // Pass data to the view
        require_once '../app/views/portfolio.php';
    }
}
?>
