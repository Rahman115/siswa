<?php

use modules\controllers\MainController;

class ProfilController extends MainController
{

    public function index()
    {
        $data = $_SESSION["login"];
        $this->template('profil', array('userData' => $data, 'title' => '👤 Profil Siswa'));
    }
}
?>