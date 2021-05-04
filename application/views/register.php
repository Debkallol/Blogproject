<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Register Page</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="<?php echo base_url(); ?>vendor/css/style.css" rel="stylesheet">

  </head>
  <body>
      <!-- Navigation-->
      <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="index.html">Clean Blog</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url(); ?>index.php/auth/login">Log in</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.html">Sample Post</a></li>
                    </ul>
                </div>
            </div>
        </nav>
         <!-- Page Header-->
         <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <span class="subheading">Start Your Blog Now</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    
    <div class="col-lg-4 col-lg-offset-2" >
    <h1>Register Page:</h1>
    <p>Fill in the details to register in our blog</p>
    
    <?php if(isset($_SESSION['success1'])) { ?>
        <div class="alert alert-success"><?php echo $_SESSION['success1']; ?> </div>
    <?php
    } ?>

   

    <?php echo validation_errors ('<div class="alert alert-danger">', '</div>'); ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username" >Username:</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>

        <div class="form-group">
            <label for="email" >Email:</label>
            <input class="form-control" name="email" id="email" type="text">
        </div>

        <div class="form-group">
            <label for="password" >Password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="password" >Confirm password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="gender" >Gender:</label>
            <select class="form-control" id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>

        <div class="form-group">
            <label for="phone" >Phone:</label>
            <input class="form-control" name="phone" id="phone" type="text">
        </div>

        <div class="text-center">
            <button class="btn btn-primary" name="register">Register</button>
        </div>
    </form>
    </div>

     <!-- Footer-->
     <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-10 mx-auto">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <p class="copyright text-muted">Copyright &copy; Your Website 2021</p>
                    </div>
                </div>
            </div>
        </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  </body>
</html>