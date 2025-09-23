<?php

class Controller{
  
  protected $models = array();
  
    protected function view($viewName){
        $view = new View($viewName);
        return $view;
    }
	
	protected function fpdf(){
		$pdf = new FPDF();
		return $pdf;
	}

    protected function model($modelName){
        $modelFile = ROOT . DS . 'modules' . DS . 'models' . DS . $modelName . 'Model.php';
        
        if (!file_exists($modelFile)) {
            throw new Exception("Model file not found: " . $modelFile);
        }
        
        require_once $modelFile;
        $className = ucfirst($modelName). 'Model';
        
        if (!class_exists($className)) {
            throw new Exception("Model class not found: " . $className);
        }
        
        $this->models[$modelName] = new $className();
        
        return $this->models;
    }

    // Method khusus untuk mendapatkan model
    protected function getModel($modelName) {
        return isset($this->models[$modelName]) ? $this->models[$modelName] : null;
    }

    protected function template($viewName, $data = array()){
        $view = $this->view('template');
        $view->bind('viewName', $viewName);
        $view->bind('data', $data);
    }
	
	protected function templatePdf($viewName, $data = array()) {
		$view = $this->view('templatePdf');
		$view->bind('viewName', $viewName);
		$view->bind('data', $data);
	}
    
    public function back() {

        echo '<script>history.go(-1);</script>';
    }

    public function redirect($url = "") {

        header("location:" . $url);
    }

    protected function validate($data) {

        return htmlentities(trim(strip_tags($data)));
    }
}
?>