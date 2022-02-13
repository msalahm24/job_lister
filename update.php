<?php
include 'config/init.php';

$category= new Category;
$job=new Job;
$job_update_tempalte=new Template('templates/job_update.php');
$job_update_tempalte->categories=$category->getAllCategory();
$job_update_tempalte->job=$job->getJobById($_GET['id']);
$job_update_tempalte->job_cate=$category->getSingleCategory($job->getJobById($_GET['id'])->category_id);

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
    $data['id']=$_POST['id'];
    if($job->update($data))
    {
        redirect('index.php','your job been updated','success');
    }
    else
    {
        redirect('index.php','Something went wrong','error');
    }
}

echo $job_update_tempalte;
?>
