<?php

namespace App\classes;


class AboutSkillsClass
{

    public $skill_name, $skill_range, $fp;

    public function __construct($postArray)
    {
        $this->skill_name = $postArray['skill_name'];
        $this->skill_range = $postArray['skill_range'];
    }

    public function aboutSkillsFile($rpathofAS)
    {
        $this->fp = fopen("$rpathofAS", 'a');
        fwrite($this->fp, "$this->skill_name ,\n");
        fwrite($this->fp, "$this->skill_range,\n");



        header("location:route.php?page=about");
    }
}
