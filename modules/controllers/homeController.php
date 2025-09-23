<?php

use \modules\controllers\MainController;

class homeController extends MainController
{

    public function index()
    {

        $data = $_SESSION["login"];
        // var_dump($data);
        // $this->model('bukutamu');
        // $this->model('artikel');
//        $this->model('guru');
        // $this->model('kontak');
        $this->template(
            'home',
            array('userData' => $data, 'title' => '📚 E-Learning Siswa')
        );
    }

}

?>