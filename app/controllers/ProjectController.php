<?php
require_once '../database.php';
require_once '../models/ProjectModel.php'; // Include the model


// Retrieve project ID from the GET request
$projectId = isset($_GET['idportfolios']) ? (int)$_GET['idportfolios'] : 0;

$project = $model->getProjectById($projectId);

// Include the view
include '../app/views/project.php';
?>
