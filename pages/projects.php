<?php

$data = file_get_contents("db/project.txt");
$aData = explode(",", $data);
$count = count($aData)

?>

<section class="container project my-5" id="projects">
    <div class="main-title">
        <h2>My <span>Work</span><span class="bg-text">My Work</span></h2>
    </div>
    <p class="proj-text">
        Here is some of my work that I've done in various programming
        languages.
    </p>
    <div class="projects">

        <?php
        for ($i = 0; $i < $count - 1; $i++) {
        ?>


            <div class="project-item">
                <div class="image">
                    <img src="<?php echo $aData[$i]  ?>" alt="" />
                </div>
                <div class="hover-items">
                    <h3><?php echo $aData[$i + 1]  ?></h3>
                    <div class="icons">
                        <a href="<?php echo $aData[$i + 2]  ?>" class="icon">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="<?php echo $aData[$i + 3]  ?>" class="icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="<?php echo $aData[$i + 4]  ?>" class="icon">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php $i += 4  ?>

        <?php } ?>



    </div>
</section>