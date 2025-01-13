<?php
require_once './app/model/OverMijModel.php';

class OverMijController {
    public function index() {

        $overMijModel = new OverMijModel();

        // Fetch personal information
        $personalInfo = $overMijModel->getPersonalInfo();

        include './app/views/overmij.php';
    }
}
?>
