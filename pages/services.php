<?php
$data = file_get_contents("db/service.txt");
$aData = explode(",", $data);
$count = count($aData)


?>

<section class="service my-5" id="services">
    <div class="main-title">
        <h2>
            MY <span>Services</span><span class="bg-text">My Services</span>
        </h2>
    </div>
    <p class="proj-text">
        Here is some of my Services that I am offering with quality assurance.
    </p>
    <div class="container">



        <div class="services">
            <?php
            for ($i = 0; $i < $count - 1; $i++) {
            ?>

                <div class="card">
                    <img src="<?php echo $aData[$i]   ?>" alt="car" />
                    <div class="intro">
                        <h1><?php echo $aData[$i + 1]   ?></h1>
                        <p>
                            In this <span><?php echo $aData[$i + 1]   ?></span> <?php echo $aData[$i + 2]   ?>
                        </p>
                    </div>
                </div>

                <?php $i += 2  ?>

            <?php } ?>
        </div>

    </div>
</section>