<?php

use modules\controllers\MainController;

class MapelController extends MainController
{

    public function index()
    {
        $data = $_SESSION["login"];
        $this->template('mapel', array('userData' => $data, 'title' => '📚 Materi E-Learning'));
    }
}