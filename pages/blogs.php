<?php

$data = file_get_contents("db/blog.txt");
$aData = explode(",", $data);
$count = count($aData)

?>

<section class="container my-5" id="blogs">
    <div class="blogs-content">
        <div class="main-title b-s-1400">
            <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
        </div>
        <div class="blogs">

            <?php

            for ($i = 0; $i < $count - 1; $i++) {

            ?>

                <div class="blog">
                    <?php echo $aData[$i]  ?>
                    <div class="blog-text">
                        <h4><?php echo $aData[$i + 1]  ?></h4>
                        <p>
                            <?php echo $aData[$i + 2]  ?>
                        </p>
                    </div>
                </div>

                <?php $i += 2  ?>

            <?php } ?>

        </div>
    </div>
</section>