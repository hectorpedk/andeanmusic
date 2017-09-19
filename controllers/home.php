<?php
include_once "models/band.php";

class HomeController
{
    private $model;
    
    function __construct()
    {
    }
    
    public function actionGetAllBands()
    {
        $this->model = new BandModel();
        return $this->model->getAllBands();   
    }
    
    public function actionGetAllBandsNames()
    {
        $this->model = new BandModel();
        return $this->model->getAllBandsNames();   
    }
    
    public function actionLatestBands()
    {
        $this->model = new BandModel();
        return $this->model->getLatestBands();
    }
}