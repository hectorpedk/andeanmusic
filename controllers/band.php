<?php
include "models/band.php";

class BandController
{
    private $model;
    
    function __construct()
    {
    }
    
//    public function actionGetBand()
//    {
//        echo $id = $_POST['id'];
//        $this->model = new BandModel();
//        return $this->model->getBandById($id);
//    }
    
    public function actionGetBandByName()
    {
        $this->model = new BandModel();
        return $this->model->getBandByName($_GET['name']);
    }
    
    public function actionGetAllBandsNames()
    {
        $this->model = new BandModel();
        return $this->model->getAllBandsNames();   
    }
    
    public function actionGetBandPage()
    {
        $this->model = new BandModel();
        return $this->model->getBandPage($_GET['name']);
        
//        $_GET['page'] = 
    }
//    
//    public function actionSearchBandByName()
//    {
//        $bandName = $_POST['bandName'];
//        echo $bandName;
//        return;
//    }
}

