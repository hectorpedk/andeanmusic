<?php

class Router
{
    private $page;
    private $requestedPage;
    
    function __construct()
    {
//        $this->views = array("home","about","bands","contact","sumaqllaqta",
//            "loskjarkas","saviaandina","kalamarka","proyeccion","awatinas",
//            "williamluna","wayanayinka","wayanay");
        $this->page = null;
        $this->requestedPage = null;
    }    
    
    public function getRequestedPage()
    {
        // GET
        $this->requestedPage = basename($_SERVER['REQUEST_URI']);
        $temp = explode('?', $this->requestedPage);
        $this->requestedPage = array_shift($temp);
        $_GET['name'] = $this->requestedPage;
    }
        
    public function route()
    {
        if($this->requestedPage != null)
        {
            include "controllers/band.php";            
            $controller = new BandController();            
            $oBand = $controller->actionGetBandPage();            
            while ($row = $oBand->fetch_object())
            {
                $this->page = $row->page;
            }
            
            if($this->requestedPage == $this->page)
            {
                include "views/header.php";
                include "views/band.php";
                include "views/footer.php";
            }
//            for($i=0; $i<sizeof($this->views); $i++)
//            {
//                if($this->views[$i] == $this->page)
//                {
//                    include "views/header.php";
//                    include "views/band.php";
//                    include "views/footer.php";
//                }
//            }            
            else
            {
                switch($this->requestedPage)
                {
                    case "andeanmusic";
                        include "views/header.php";
                        include "controllers/"."home.php";
                        include "views/home.php";
                        include "views/footer.php";
                        ?>
                        <script>
                            var activeLink = document.getElementById("home");
                            activeLink.style.color ="#cc1313";
                        </script>
                        <?php
                        break;
                    case "contact.php";
                        include "views/header.php";
                        include "views/contact.php";
                        include "views/footer.php";
                        ?>                    
                        <script>
                            var activeLink = document.getElementById("contact");
                            activeLink.style.color ="#cc1313";
                        </script>
                        <?php
                        break;
                    case "about.php";
                        include "views/header.php";
                        include "views/about.php";
                        include "views/footer.php";
                        ?>                    
                        <script>
                            var activeLink = document.getElementById("about");
                            activeLink.style.color ="#cc1313";
                        </script>
                        <?php
                        break;
                    case "bands.php";
                        include "views/header.php";
                        include "views/bands.php";
                        include "views/footer.php";
                        ?>                    
                        <script>
                            var activeLink = document.getElementById("bands");
                            activeLink.style.color ="#cc1313";
                        </script>
                        <?php
                        break;
                }
            }
            
        }
    }
}

