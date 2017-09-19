<?php

$controller = new HomeController();
$oLatestBands = $controller->actionLatestBands();
?>
<main>
    <div class="slideshow-container container-960">
    <?php
        while ($row = $oLatestBands->fetch_object())
        {
            echo '<a href="'.$row->page.'"><div class="mySlides fade">
                    <img src="img/bands/'.$row->image.'">
                    <div class="text">'.$row->name.'</div>
                </div></a>';
        }
    ?>
    </div>    
    <section class="content container-960 padding-left-10 padding-right-10">
<!--        <div>
            <h2>Welcome</h2>
            <p>
                Lorem ipsum dolor sit amet, ad eos iriure corpora prodesset. Partem timeam at vim,
                mel veritus accusata ea. Ius ei dicam inciderint, eleifend deseruisse ei mea.
                Alia dicam eam te, summo exerci ei mei.Ei sea debet choro omittantur.
                Ea nam quis aeterno, et usu semper senserit.
            </p>
            <p>
                Lorem ipsum dolor sit amet, ad eos iriure corpora prodesset. Partem timeam at vim,
                mel veritus accusata ea. Ius ei dicam inciderint, eleifend deseruisse ei mea.
                Alia dicam eam te, summo exerci ei mei.Ei sea debet choro omittantur.
                Ea nam quis aeterno, et usu semper senserit.
            </p>
        </div>-->
    </section>
</main>
