<?php
require_once './app/model/OverMijModel.php';

class OverMijController {
    public function index() {
        // Initialize the model
        $overMijModel = new OverMijModel();

        // Fetch personal information
        $personalInfo = $overMijModel->getPersonalInfo();

        // Include the "overmij" view and pass the $personalInfo data
        include './app/views/overmij.php';
    }
}
?>
