<?php include 'inc/header.php'; ?>
<?php echo $job->job_title ?>
<div class="well">
    <a href="update.php?id=<?php echo $job->id;?>" class="btn btn-default">Edit</a>
    <form style="display:inline;" action="single_job.php" method="post">
        <input type="hidden" name="del_id" value="<?php echo $job->id ?>">
        <input type="submit" class="btn btn-danger" value="Delete">
    </form>
</div>    
<?php include 'inc/footer.php'; ?>
