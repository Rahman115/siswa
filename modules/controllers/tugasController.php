<?php

use modules\controllers\MainController;

class TugasController extends MainController {
    public function index() {
        $this->template('tugas', array('title' => '📑 Halaman Tugas'));
    }
}




?>