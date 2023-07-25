<?php

namespace App\classes;


class ProjectClass
{

    public $p_name, $g_link, $l_link, $y_link, $fp, $imgName, $tempImg, $myImg;

    public function __construct($postArray, $postFiles)
    {
        $this->p_name = $postArray['p_name'];
        $this->g_link = $postArray['g_link'];
        $this->l_link = $postArray['l_link'];
        $this->y_link = $postArray['y_link'];



        $this->imgName = $postFiles['project-img']['name'];
        $this->tempImg = $postFiles['project-img']['tmp_name'];
        $this->myImg = "assets/img/$this->imgName";
        move_uploaded_file($this->tempImg, $this->myImg);
    }

    public function projectFile($rpathofP)
    {
        $this->fp = fopen("$rpathofP", 'a');
        fwrite($this->fp, "{$this->myImg} ,\n");
        fwrite($this->fp, "$this->p_name ,\n");
        fwrite($this->fp, "$this->g_link ,\n");
        fwrite($this->fp, "$this->l_link ,\n");
        fwrite($this->fp, "$this->y_link ,\n");


        header("location:route.php?page=projects");
    }
}
