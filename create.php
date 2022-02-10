<?php
    include 'config/init.php';

    $category= new Category;
    $job=new Job;
    $job_create_tempalte=new Template('templates/job-create.php');
    $job_create_tempalte->categories=$category->getAllCategory();

    if(isset($_POST['submit']))
    {
        $data=array();
        $data['company'] = $_POST['company'];
        $data['category_id'] = $_POST['category_id'];
        $data['job_title'] = $_POST['job_title'];
        $data['description'] = $_POST['description'];
        $data['salary'] = $_POST['salary'];
        $data['location'] = $_POST['location'];
        $data['contact_user'] = $_POST['contact_user'];
        $data['contact_email'] = $_POST['contact_email'];

        if($job->create($data))
        {
            redirect('index.php','your job been listed','success');
        }
        else
        {
            redirect('index.php','Something went wrong','error');
        }
    }
    
    echo $job_create_tempalte;
?>