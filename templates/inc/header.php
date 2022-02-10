
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Lister</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="header clearfix">
     <nav>
         <ul class="nav nav-pills pull-right">
             <li role="presentation" ><a href="index.php">Home</a></li>
             <li role="presentation"><a href="create.php">Create Listing</a></li>
            <li role="presentation"><a href="#">Contact</a></li>
         </ul>
     </nav>
     <h3 class="text-muted">JOB LISTER</h3>
    </div>

    <?php dispalyMessage(); ?>