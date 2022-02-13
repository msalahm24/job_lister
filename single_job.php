<?php
    include 'config/init.php';

    $job=new Job;

    $tempalte= new Template('templates/Single-job.php');

    $job_id=isset($_GET['id']) ? $_GET['id'] : null;

    $tempalte->job=$job->getJobById($job_id);

    if(isset($_POST['del_id']))
    {
        $del_id=$_POST['del_id'];
        if($job->delete($del_id))
        {
            redirect('index.php','job deleted','success');
        }else
        {
            redirect('index.php','job not deleted','error');
        }
    }

    echo $tempalte;
?>