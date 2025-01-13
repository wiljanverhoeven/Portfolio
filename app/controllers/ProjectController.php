<?php
require_once './app/model/ProjectModel.php';

class ProjectController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    //fetches the information for the selected project
    public function index() {
        // Check for id
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $projectId = intval($_GET['id']);
            
            $projectModel = new ProjectModel($this->pdo);
            
            // Fetch the projects infromation by ID
            $project = $projectModel->getProjectById($projectId);

            require './app/views/project.php';
        } else {
            // If id is invalid
            echo "Invalid project ID.";
        }
    }
}
