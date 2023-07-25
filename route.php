<?php

use App\classes\AboutClass;
use App\classes\AboutSkillsClass;
use App\classes\AboutTimelineClass;
use App\classes\BannerClass;
use App\classes\BlogClass;
use App\classes\ContactClass;
use App\classes\DbController;
use App\classes\NavClass;
use App\classes\ProjectClass;
use App\classes\ServiceClass;

require_once "vendor/autoload.php";

include "pages/includes/header.php";

if ("home" == $_GET["page"]) {

    include "pages/home.php";
} elseif ("about" == $_GET["page"]) {
    include "pages/about.php";
} elseif ("projects" == $_GET["page"]) {
    include "pages/projects.php";
} elseif ("services" == $_GET["page"]) {
    include "pages/services.php";
} elseif ("blogs" == $_GET["page"]) {
    include "pages/blogs.php";
} elseif ("contact" == $_GET["page"]) {
    if (isset($_POST['btn-contact'])) {
        $contactFile = new ContactClass($_POST);
    }
    include "pages/contact.php";
} elseif ("adminLogin" == $_GET["page"]) {
    include "pages/adminLogin.php";
} elseif ("adminDashboard" == $_GET["page"]) {
    if (isset($_POST['btn-nav'])) {
        $navFile = new NavClass($_POST);
    } elseif (isset($_POST['btn-banner'])) {
        if (4 != $_FILES['banner-img']['error']) {
            $bannerFile = new BannerClass($_POST, $_FILES);
        }
    } elseif (isset($_POST['btn-about'])) {
        $aboutFile = new AboutClass($_POST);
    } elseif (isset($_POST['btn-about-skills'])) {
        $aboutSkillsFile = new AboutSkillsClass($_POST);
    } elseif (isset($_POST['btn-about-timeline'])) {
        $aboutTimelineFile = new AboutTimelineClass($_POST);
    } elseif (isset($_POST['btn-project'])) {
        if (4 != $_FILES['project-img']['error']) {
            $projectFile = new ProjectClass($_POST, $_FILES);
        }
    } elseif (isset($_POST['btn-service'])) {
        if (4 != $_FILES['service-img']['error']) {
            $serviceFile = new ServiceClass($_POST, $_FILES);
        }
    } elseif (isset($_POST['btn-blog'])) {

        $blogFile = new BlogClass($_POST);
    }


    include "pages/adminDashboard.php";
}



include "pages/includes/footer.php";
