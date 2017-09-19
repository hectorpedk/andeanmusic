<?php

include_once "controllers/band.php";
$controller = new BandController();
$oBand = $controller->actionGetAllBandsNames();
?>

<main>
    <section class="bands section960 padding-top-10">
        <?php
        while ($row = $oBand->fetch_object())
        {
            echo"<figure>
                    <a class='bold' href='$row->page'>
                        <img src='img/bands/".$row->id."_profile.jpg'>
                        <figcaption>
                            $row->name
                        </figcaption>
                    </a>
                </figure>";
        }
        ?>        
    </section>   
        
<!--    <h2>Bands</h2>    
    <div class="container960 float-container" style="background: peru">-->
    <?php
//    while ($row = $oBand->fetch_object())
//    {
//        echo"<div col-4'>
//            <div class='text-align-center'>
//                <div style='background:red; text-align:center'>
//                    <img class='float-left' style='margin-right:10px' src='img/bands/2_profile.jpg'>
//                </div>
//            </div>
//            </div>";
//    }
    ?>
    <!--</div>-->
</main>
