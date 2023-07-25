<?php
$ppath = getcwd();
$path = str_replace("\\", "/", $ppath);
$rpathof = $path . "/db/nav_brand.txt";
$rpathofB = $path . "/db/banner.txt";
$rpathofA = $path . "/db/about.txt";
$rpathofAS = $path . "/db/about_skills.txt";
$rpathofAT = $path . "/db/about_timeline.txt";
$rpathofP = $path . "/db/project.txt";
$rpathofS = $path . "/db/service.txt";
$rpathofBl = $path . "/db/blog.txt";

if (isset($_POST['btn-nav'])) {
    $navFile->navFile($rpathof);
} elseif (isset($_POST['btn-banner'])) {
    $bannerFile->bannerFile($rpathofB);
} elseif (isset($_POST['btn-about'])) {
    $aboutFile->aboutFile($rpathofA);
} elseif (isset($_POST['btn-about-skills'])) {
    $aboutSkillsFile->aboutSkillsFile($rpathofAS);
} elseif (isset($_POST['btn-about-timeline'])) {
    $aboutTimelineFile->aboutTimelineFile($rpathofAT);
} elseif (isset($_POST['btn-project'])) {
    $projectFile->projectFile($rpathofP);
} elseif (isset($_POST['btn-service'])) {
    $serviceFile->serviceFile($rpathofS);
} elseif (isset($_POST['btn-blog'])) {
    $blogFile->blogFile($rpathofBl);
}



?>

<section class=" admin-dashboard my-5" id="admin-dashboard">
    <div class="main-title">
        <h2>Dash<span>board</span><span class="bg-text">Dashboard</span></h2>
    </div>

    <section class="position-fixed my-5">
        <div class="container ">
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#navbar" class=" text-decoration-none text-white ">Navbar</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#banner" class=" text-decoration-none text-white">Banner</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#about" class=" text-decoration-none text-white">About</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#skills" class=" text-decoration-none text-white">Skills</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#timeline" class=" text-decoration-none text-white">Timeline</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#project" class=" text-decoration-none text-white">Project</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#service" class=" text-decoration-none text-white">Service</a>
            </div>
            <div class=" btn-chocolate p-2 rounded-2 m-1">
                <a href="#blog" class=" text-decoration-none text-white">Blog</a>
            </div>

        </div>
    </section>

    <section class="d-grid">

        <div class="container eg" id="navbar">
            <form action="" method="POST" class="bg-dark mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change Navbar Brand</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="First name" name="f_name" aria-label="First name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Last name" name="l_name" aria-label="Last name" required="required">
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="btn-nav" id="btn-nav" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

        <div class="container eg" id="banner">
            <form action="" method="POST" enctype="multipart/form-data" class="bg-form mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change Banner Section</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="First name" name="f_name" aria-label="First name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Last name" name="l_name" aria-label="Last name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Your Profession" name="profession" aria-label="Your Profession" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <textarea name="description" class="form-control" placeholder="Write something about yourself..." id="description" cols="90" rows="3" required="required"></textarea>
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <label for="banner-img" class="mb-2">Upload banner Image</label>
                        <input type="file" class="form-control" name="banner-img" id="banner-img" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <label for="resume" class="mb-2">Upload Your Resume</label>
                        <input type="file" class="form-control" name="resume" id="resume" required="required">
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="btn-banner" id="btn-banner" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

        <div class="container eg" id="about">
            <form action="" method="POST" class="bg-dark mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change About Section</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <textarea name="des1" class="form-control" placeholder="Write something about yourself..." id="des1" cols="90" rows="3" required="required"></textarea>
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <textarea name="des2" class="form-control" placeholder="Write Your Skills and Hobbies..." id="des2" cols="90" rows="3" required="required"></textarea>
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Title of Card 1" name="c1_title" aria-label="c1_title" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="number" class="form-control" placeholder="Years of experience or amount of projects" name="c1_number" aria-label="c1_number" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Title of Card 2" name="c2_title" aria-label="c2_title" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="number" class="form-control" placeholder="Years of experience or amount of projects" name="c2_number" aria-label="c2_number" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Title of Card 3" name="c3_title" aria-label="c3_title" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="number" class="form-control" placeholder="Years of experience or amount of projects" name="c3_number" aria-label="c3_number" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Title of Card 4" name="c4_title" aria-label="c4_title" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="number" class="form-control" placeholder="Years of experience or amount of projects" name="c4_number" aria-label="c4_number" required="required">
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="btn-about" id="btn-about" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

        <div class="container eg" id="skills">
            <form action="" method="POST" class="bg-form mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change About Section Skills</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Name of Your Skills" name="skill_name" aria-label="skill_name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <label for="skill_range" class="form-label">Level of Skills</label>
                        <input type="range" class="form-range" min="0" max="100" step="25" name="skill_range" id="skill_range">
                    </div>
                    <div class="text-center">
                        <input type="submit" name="btn-about-skills" id="btn-about-skills" value="Submit" class="btn btn-chocolate text-white my-3 ">
                    </div>
                </div>
            </form>
        </div>

        <div class="container eg" id="timeline">
            <form action="" method="POST" class="bg-dark mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change About Section Timeline</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Enter Starting Time" name="s_time" aria-label="s_time" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Enter Ending Time" name="e_time" aria-label="e_time" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Enter Event Name" name="e_name" aria-label="e_name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Enter Organization Name" name="o_name" aria-label="o_name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <textarea name="des" class="form-control" placeholder="Write something about your Experience..." id="des" cols="90" rows="3" required="required"></textarea>
                    </div>
                </div>
                <div class="text-center">
                    <input type="submit" name="btn-about-timeline" id="btn-about-timeline" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

        <div class="container eg" id="project">
            <form action="" method="POST" enctype="multipart/form-data" class="bg-form mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change Project Section</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <label for="project-img" class="mb-2">Upload Project Image</label>
                        <input type="file" class="form-control" name="project-img" id="project-img" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Project Name" name="p_name" aria-label="p_name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="url" class="form-control" placeholder="Github link- http://" name="g_link" aria-label="g_link" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="url" class="form-control" placeholder="Linkedin link- http://" name="l_link" aria-label="l_link" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="url" class="form-control" placeholder="YouTube link- http://" name="y_link" aria-label="y_link" required="required">
                    </div>

                </div>
                <div class="text-center">
                    <input type="submit" name="btn-project" id="btn-project" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

        <div class="container eg" id="service">
            <form action="" method="POST" enctype="multipart/form-data" class="bg-dark mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change Service Section</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <label for="service-img" class="mb-2">Upload service Image</label>
                        <input type="file" class="form-control" name="service-img" id="service-img" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Service Name" name="s_name" aria-label="s_name" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <textarea name="s_des" class="form-control" placeholder="Write something about your Service..." id="s_des" cols="90" rows="3" required="required"></textarea>
                    </div>

                </div>
                <div class="text-center">
                    <input type="submit" name="btn-service" id="btn-service" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

        <div class="container eg" id="blog">
            <form action="" method="POST" enctype="multipart/form-data" class="bg-form mt-5 rounded-3">
                <h2 class="text-white text-center py-3">Change Blog Section</h2>
                <div class="row py-6 mx-auto">
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="YouTube Video Link" name="b_link" aria-label="b_link" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <input type="text" class="form-control" placeholder="Blog Title" name="b_title" aria-label="b_title" required="required">
                    </div>
                    <div class="col-md-7 my-3 mx-auto">
                        <textarea name="b_des" class="form-control" placeholder="Write something about your blog..." id="b_des" cols="90" rows="3" required="required"></textarea>
                    </div>

                </div>
                <div class="text-center">
                    <input type="submit" name="btn-blog" id="btn-blog" value="Submit" class="btn btn-chocolate text-white my-3 ">
                </div>

            </form>
        </div>

    </section>
</section>