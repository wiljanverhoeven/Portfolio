<?php
class OverMijController {
    public function index() {
        // Load the model
        require_once '../app/models/OverMijModel.php';
        $model = new OverMijModel();
        $personalInfo = $model->getPersonalInfo();

        // Pass data to the view
        require_once '../app/views/overmij.php';
    }
}
?>
