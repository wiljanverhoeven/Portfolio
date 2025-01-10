<?php
class HomepageController {
    public function index() {
        // If needed, load model and fetch data here
        require_once '../app/models/HomeModel.php';
        $model = new HomepageModel();

        // Load the view
        require_once '../app/views/home.php';
    }
}
?>
