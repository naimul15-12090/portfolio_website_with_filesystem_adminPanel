<?php

$data = file_get_contents("db/banner.txt");
$aData = explode(",", $data);

?>

<section class="banner container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="banner-main-img">
                <div class="banner-main-img-upper-border"></div>
                <img src="<?php echo $aData[4] ?>" alt="banner-img" width="280px" height="560px" />
                <div class="banner-main-img-lower-border"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="banner-text">
                <h4 class="banner-text-header-top">Hi, I'm</h4>
                <h1 class="banner-text-header"><?php echo $aData[0] . " " . $aData[1]  ?></h1>
                <h3 class="banner-text-header-bottom">
                    <?php echo $aData[2] ?>
                </h3>
                <p class="banner-text-paragraph">
                    <?php echo $aData[3] ?>
                </p>
                <button class="btn btn-outline-warning">
                    <a href="<?php echo $aData[5] ?>" download="" class="btn-link">
                        <i class="fa fa-download"></i> Download CV
                    </a>
                </button>
            </div>
        </div>
    </div>
</section>