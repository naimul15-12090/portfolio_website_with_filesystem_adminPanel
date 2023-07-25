<?php

namespace App\classes;


class BannerClass
{

    public $fn, $ln, $prof, $des, $fp, $imgName, $tempImg, $myImg, $resumeName, $tempResume, $myResume;

    public function __construct($postArray, $postFiles)
    {
        $this->fn = $postArray['f_name'];
        $this->ln = $postArray['l_name'];
        $this->prof = $postArray['profession'];
        $this->des = $postArray['description'];


        $this->imgName = $postFiles['banner-img']['name'];
        $this->tempImg = $postFiles['banner-img']['tmp_name'];
        $this->myImg = "assets/img/$this->imgName";
        move_uploaded_file($this->tempImg, $this->myImg);

        $this->resumeName = $postFiles['resume']['name'];
        $this->tempResume = $postFiles['resume']['tmp_name'];
        $this->myResume = "assets/files/$this->resumeName";
        move_uploaded_file($this->tempResume, $this->myResume);
    }

    public function bannerFile($rpathofB)
    {
        $this->fp = fopen("$rpathofB", 'w');
        fwrite($this->fp, "$this->fn ,\n");
        fwrite($this->fp, "$this->ln ,\n");
        fwrite($this->fp, "$this->prof ,\n");
        fwrite($this->fp, "$this->des ,\n");
        fwrite($this->fp, "{$this->myImg} ,\n");
        fwrite($this->fp, "{$this->myResume} ,\n");

        header("location:route.php?page=home");
    }
}
