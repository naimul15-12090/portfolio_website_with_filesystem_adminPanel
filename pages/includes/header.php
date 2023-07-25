<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $_GET["page"]  ?></title>
    <link rel="stylesheet" href="assets/css/all.css" />
    <link rel="stylesheet" href="assets/css/bootstrap.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-black navbar-dark navbar1">
            <div class="container">

                <?php

                $data = file_get_contents("db/nav_brand.txt");
                $aData = explode(",", $data);

                ?>

                <a href="#" class="navbar-brand">
                    <span class="navbar-brand-firstname"><?php echo $aData[0] ?></span>
                    <?php echo $aData[1] ?><span class="navbar-brand-dot">.</span>
                </a>

                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#mainMenu">
                    <i class="navbar-toggler-icon"></i>
                </button>

                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav ms-auto">
                        <li><a href="?page=home" class="nav-link">Home</a></li>
                        <li><a href="?page=about" class="nav-link">About Me</a></li>
                        <li><a href="?page=projects" class="nav-link">Projects</a></li>
                        <li><a href="?page=services" class="nav-link">Services</a></li>
                        <li><a href="?page=blogs" class="nav-link">Blogs</a></li>
                        <li><a href="?page=contact" class="nav-link">Contact</a></li>
                        <li><a href="?page=adminLogin" class="nav-link">Admin Panel</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>