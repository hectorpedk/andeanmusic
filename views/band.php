<?php

include_once "controllers/band.php";
$controller = new BandController();
$oBand = $controller->actionGetBandByName();
?>

<main>
    <div class="container-960">
        <?php
        while ($row = $oBand->fetch_object())
        {
            echo"<img src=img/bands/".$row->image." />";
            ?>
        
            <div class="container-full">
                <?php
                echo "<h1>".$row->name."</h1>";
                echo "<hr>";
                echo $row->country;
                echo "<hr>";
                echo $row->about;
                echo "<hr>";
                echo $row->website_1."<br>";
                echo $row->website_2."<br>";
                echo $row->website_3."<br>";
                echo $row->website_4."<br>";
                echo $row->website_5."<br>";
                ?>
            </div>
        <?php
        }
        ?>               
    </div>
</main>

