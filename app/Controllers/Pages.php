<?php
    require './../app/Controllers/Controller.php';
    class Pages extends Controller {
        public function index() {
            $this->view('Home');
        }
    }