<?php
    include 'config/init.php';

    $job=new Job;

    $tempalte= new Template('templates/Single-job.php');

    $job_id=isset($_GET['id']) ? $_GET['id'] : null;

    $tempalte->job=$job->getJobById($job_id);

    echo $tempalte;
?>