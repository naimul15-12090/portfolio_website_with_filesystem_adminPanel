<?php
$ppath = getcwd();
$path = str_replace("\\", "/", $ppath);
$rpathof = $path . "/db/admin_login.txt";
$data = file_get_contents($rpathof);
$aData = explode(",", $data);

if (isset($_POST['Login'])) {
    if ($aData[0] == $_POST["user"] && $aData[1] == $_POST["pass"]) {
        header("Location:route.php?page=adminDashboard");
    } else {
        $msg = "Sorry, your username or password was incorrect.";
    }
}

?>



<section class=" admin-panel my-5 vh-100" id="admin-panel">
    <div class="main-title">
        <h2>Admin <span>Panel</span><span class="bg-text">Admin Panel</span></h2>
    </div>
    <div class="outerBox">
        <div class="box">
            <form action="" method="POST">
                <h2>Sign <span>in</span></h2>
                <h3><?php
                    if (isset($msg)) {
                        echo $msg;
                    }
                    ?></h3>
                <div class="inputBox">
                    <input type="text" name="user" required="required">
                    <span>Username</span>
                    <i></i>
                </div>
                <div class="inputBox">
                    <input type="password" name="pass" required="required">
                    <span>Password</span>
                    <i></i>
                </div>
                <input type="submit" name="Login" value="Login">
            </form>
        </div>
    </div>

</section>