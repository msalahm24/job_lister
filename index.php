<?php
    include 'config/init.php';
    
    $job=new Job;
    $category= new Category;
    $frontPage_template=new Template('templates/frontpage.php');
    $frontPage_template->categories=$category->getAllCategory();
    $cate_value=isset($_GET['category']) ? $_GET['category'] : null;
    $frontPage_template->title="All Jobs";
    $headertemplate=new Template("templates\inc\header.php");
    $headertemplate->site_title= SITE_TITLE;
    if($cate_value)
    {
        $frontPage_template->jobs=$job->getJobByCategory($cate_value);
        $frontPage_template->title=$category->getSingleCategory($cate_value)->name;
    }
    else
    {
        $frontPage_template->jobs = $job->getAllJobs();
    }

    echo $frontPage_template;
?>