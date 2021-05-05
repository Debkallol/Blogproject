<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Your Blog Now</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)
    <link href="css/styles.css" rel="stylesheet" />-->
	<link href="<?php echo base_url(); ?>vendor/css/style.css" rel="stylesheet">
    </head>
    <body>
        
        <!-- Main Content-->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    
                    <div class="post-preview">
						<?php foreach ($fetch->result() as $row) {
							?>
                        <a href="post.html">
                            <h2 class="post-title"><?php echo $row->title; ?></h2>
                            <h3 class="post-subtitle"><?php echo $row->content; ?></h3>
                        </a>
						<?php } ?>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on August 24, 2021
                        </p>
                    </div>
                    <hr />
                    <div class="post-preview">
                        <a href="post.html">
                            <h2 class="post-title">Failure is not an option</h2>
                            <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to future generations.</h3>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="#!">Start Bootstrap</a>
                            on July 8, 2021
                        </p>
                    </div>
                    <hr />
                    <!-- Pager-->
                    <div class="clearfix"><a class="btn btn-primary float-right" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>
        <hr />
        
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
