<?php include 'inc/header.php'?>
    <div class="container">
        
        <div class="jumbotron">
            <h1>Find a Job</h1>
            <form action="index.php" method="GET">
                <select name="category" class="form-control">
                    <optiondisabled>Choose Category</option>
                    <option value="0">All</option>
                    <?php foreach($categories as $cate):?>
                        <option value="<?php echo $cate->id; ?>"><?php echo $cate->name; ?></option>
                    <?php endforeach;?>
                </select>
                <br>
                <input type="submit" class="btn btn-lg btn-success" value="FIND">
            </form>
        </div>
        <?php echo $title ?>
        <?php foreach($jobs as $job ):?>
            <div class="row marketing">
                <div class="col-md-10">
                <h4><?php echo $job-> job_title ?></h4>
                <p><?php echo $job->description?></p>
                </div>
                <div class="col-md-2">
                        <a class="btn btn-default" href="single_job.php?id=<?php echo $job->id; ?>">View</a>
                </div>
            </div>
        <?php endforeach;?>
 </div> <!-- /container -->

<?php include 'inc/footer.php'?>