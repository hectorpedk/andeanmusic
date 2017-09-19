<?php
include "db/database.php";

class BandModel extends Database
{
    private $connection;
    private $sql;
    private $result;
    
    function __construct()
    {
        parent::__construct();
        $this->connection = $this->getConnection();        
    }
    
//    function getBandById($id)
//    {
//        $this->sql = $this->connection->prepare("SELECT * FROM band WHERE id=?");
//        $this->sql->bind_param("s",$id);
//        $this->sql->execute();
//        return $this->result = $this->sql->get_result();
//    }
    
    function getBandByName($name)
    {
        $this->sql = $this->connection->prepare("SELECT band.name, band.website_1,
            band.website_2, band.website_3, band.website_4, band.website_5,
            band.about, image.image, country.name as country FROM band INNER JOIN image ON band.id=image.fk_band_id INNER JOIN country ON band.fk_country_id=country.id WHERE band.page=?");
        $this->sql->bind_param("s",$name);
        $this->sql->execute();
        return $this->result = $this->sql->get_result();
    }
    
//    function getAllBands()
//    {
//        $this->sql = "SELECT * FROM band";
//        $this->result = $this->connection->query($this->sql);
//        return $this->result;
//    }
    
    function getAllBandsNames()
    {
        $this->sql = "SELECT id,name,page FROM band";
        $this->result = $this->connection->query($this->sql);
        return $this->result;
    }
    
    function getLatestBands()
    {
        $this->sql = "SELECT band.name, band.page, image.image FROM image INNER JOIN band ON band.id=image.fk_band_id ORDER BY band.id DESC LIMIT 3";
        return $this->result = $this->connection->query($this->sql);
    }
    
    function getBandPage($name)
    {
        $this->sql = $this->connection->prepare("SELECT page FROM band WHERE page=?");
        $this->sql->bind_param("s",$name);
        $this->sql->execute();
        return $this->result = $this->sql->get_result();
    }
}

