<?php
require_once './app/model/ProjectModel.php';

class ProjectController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function index() {
        // Check if `id` is provided in the query string
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $projectId = intval($_GET['id']);
            
            // Instantiate the ProjectModel
            $projectModel = new ProjectModel($this->pdo);
            
            // Fetch the project details by ID
            $project = $projectModel->getProjectById($projectId);
            
            // Include the project view
            require './app/views/project.php';
        } else {
            // If `id` is not provided or invalid, show an error message
            echo "Invalid project ID.";
        }
    }
}
