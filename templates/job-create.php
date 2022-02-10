<?php include 'inc/header.php'?>
    <h2 class="page-header"> Create Job Listing </h2>
    <form action="create.php" method="POST">
        <div class="form-groub">
            <label>Company</label>
            <input type="text" class="form-control" name="company">
        </div>
        <div class="form-groub">
            <br>
            <label>Category</label>
            <select name="category_id">
                <option value="0" disabled>choose category</option>
                <?php foreach($categories as $cate):?>
                        <option value="<?php echo $cate->id; ?>"><?php echo $cate->name; ?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-groub">
            <label>Job title</label>
            <input type="text" class="form-control" name="job_title">
        </div>
        <div class="form-groub">
            <label>Description</label>
            <input type="text" class="form-control" name="description">
        </div>
        <div class="form-groub">
            <label>Salary</label>
            <input type="text" class="form-control" name="salary">
        </div>
        <div class="form-groub">
            <label>Location</label>
            <input type="text" class="form-control" name="location">
        </div>
        <div class="form-groub">
            <label>Contact user</label>
            <input type="text" class="form-control" name="contact_user">
        </div>
        <div class="form-groub">
            <label>Contact email</label>
            <input type="text" class="form-control" name="contact_email">
        </div>
        <br>
        <div class="form-groub">
        <input type="submit" class="btn btn-lg btn-success" value="submit" name="submit">
        </div>
    </form>
    <?php include 'inc/footer.php'?>