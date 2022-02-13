<?php include 'inc/header.php'?>
    <h2 class="page-header"> Create Job Listing </h2>
    <form action="update.php" method="POST">
        <div class="form-groub">
            <label>Company</label>
            <input type="text" class="form-control" name="company" value="<?php echo $job->company?>">
        </div>
        <div class="form-groub">
            <br>
            <label>Category</label>
            <select name="category_id">
                <option value="<?php echo $job_cate->id ?>" ><?php echo $job_cate->name; ?></option>
                <?php foreach($categories as $cate):?>
                    <option value="<?php echo $cate->id; ?>"><?php echo $cate->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-groub">
            <label>Job title</label>
            <input type="text" class="form-control" name="job_title" value="<?php echo $job->job_title?>">
        </div>
        <div class="form-groub">
            <label>Description</label>
            <input type="text" class="form-control" name="description" value="<?php echo $job->description?>">
        </div>
        <div class="form-groub">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary" value="<?php echo $job->salary?>">
        </div>
        <div class="form-groub">
            <label>Location</label>
            <input type="text" class="form-control" name="location" value="<?php echo $job->location?>">
        </div>
        <div class="form-groub">
            <label>Contact user</label>
            <input type="text" class="form-control" name="contact_user" value="<?php echo $job->contact_user?>">
        </div>
        <div class="form-groub">
            <label>Contact email</label>
            <input type="text" class="form-control" name="contact_email" value="<?php echo $job->contact_email?>">
        </div>
        <br>
        <div class="form-groub">
            <input type="hidden" class="form-control" name="id" value="<?php echo $job->id?>">
        </div>
        <div class="form-groub">
            <input type="submit" class="btn btn-lg btn-success" value="update" name="submit">
        </div>
    </form>
<?php include 'inc/footer.php'?>