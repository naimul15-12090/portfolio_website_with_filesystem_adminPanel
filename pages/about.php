<?php
$data = file_get_contents("db/about.txt");
$aData = explode(",", $data);

$skillsData = file_get_contents("db/about_skills.txt");
$aSkillsData = explode(",", $skillsData);
$sCount = count($aSkillsData);

$timelineData = file_get_contents("db/about_timeline.txt");
$aTimelineData = explode(",", $timelineData);
$tCount = count($aTimelineData);

?>

<section class="container about my-5" id="about">
    <div class="main-title">
        <h2>About <span>me</span><span class="bg-text">About me</span></h2>
    </div>
    <div class="about-container">
        <div class="left-about">
            <h4>Information About me</h4>
            <p>
                <?php echo $aData[0] ?><br />
                <br />
                <?php echo $aData[1] ?>
            </p>
            <div class="">
                <button class="btn btn-outline-warning">
                    <a href="#myModal" class="btn-link" data-bs-toggle="modal">Know More</a>
                </button>
            </div>
        </div>
        <div class="right-about">
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text"><?php echo $aData[3] ?>+</p>
                    <p class="small-text">
                        <?php echo $aData[2] ?>
                    </p>
                </div>
            </div>
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text"><?php echo $aData[5] ?>+</p>
                    <p class="small-text">
                        <?php echo $aData[4] ?>
                    </p>
                </div>
            </div>
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text"><?php echo $aData[7] ?>+</p>
                    <p class="small-text">
                        <?php echo $aData[6] ?>
                    </p>
                </div>
            </div>
            <div class="about-item">
                <div class="abt-text">
                    <p class="large-text"><?php echo $aData[9] ?>+</p>
                    <p class="small-text">
                        <?php echo $aData[8] ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-stats">
        <h4 class="stat-title">My Skills</h4>
        <div class="progress-bars">

            <?php
            for ($i = 0; $i < $sCount - 1; $i++) {
            ?>

                <div class="progress-bar">
                    <p class="prog-title"><?php echo $aSkillsData[$i] ?></p>
                    <div class="progress-con">
                        <p class="prog-text"><?php echo $aSkillsData[$i + 1] ?>%</p>
                        <div class="progress">

                            <?php
                            if ($aSkillsData[$i + 1] == 25) {
                            ?>
                                <span class="w-25"></span>
                            <?php  } elseif ($aSkillsData[$i + 1] == 50) { ?>
                                <span class="w-50"></span>
                            <?php  } elseif ($aSkillsData[$i + 1] == 75) { ?>
                                <span class="w-75"></span>
                            <?php  } elseif ($aSkillsData[$i + 1] == 100) { ?>
                                <span class="w-100"></span>
                            <?php  }  ?>

                        </div>
                    </div>
                </div>
                <?php $i += 1  ?>

            <?php } ?>
        </div>
    </div>
    <h4 class="stat-title">My Timeline</h4>
    <div class="timeline">

        <?php
        for ($i = 0; $i < $tCount - 1; $i++) {
        ?>

            <div class="timeline-item">
                <div class="tl-icon">
                    <i class="fas fa-briefcase"></i>
                </div>
                <p class="tl-duration"><?php echo $aTimelineData[$i] ?> - <?php echo $aTimelineData[$i + 1] ?></p>
                <h5><?php echo $aTimelineData[$i + 2] ?><span> - <?php echo $aTimelineData[$i + 3] ?></span></h5>
                <p>
                    <?php echo $aTimelineData[$i + 4] ?>
                </p>
            </div>

            <?php $i += 4  ?>

        <?php } ?>

    </div>
</section>


<div class="modal fade my-mod" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content my-mod-content">
            <div class="modal-header">
                <h3>Bio-Data</h3>
                <button type="button" class="btn-close my-mod-btn bg-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div>
                    <img class="my-mod-img" src="assets/img/banner-main-img.png" alt="profile-pic" />
                </div>
                <p><b>Name:</b> Naimul Huda Walid</p>
                <p><b>Father's Name:</b> Md. Nazmul Huda</p>
                <p><b>Mother's Name:</b> Tanjina Akter</p>
                <p><b>Date of Birth:</b> 04/09/1999</p>
                <p><b>Place of Birth:</b> Dhaka</p>
                <p><b>Blood Group:</b> O+</p>
                <p><b>Religion:</b> Islam</p>
                <p><b>Nationality:</b> Bangladeshi</p>
                <p><b>Marital Status:</b> Married</p>
                <p><b>Address:</b> 667/5/1, Molla Road, Mirpur-2, Dhaka-1216.</p>
            </div>
            <div class="modal-footer">Thank You.</div>
        </div>
    </div>
</div>