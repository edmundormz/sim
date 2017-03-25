<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Domotics</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/3-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   

    <!-- Page Content -->
    <div class="container">

        <!-- Page Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" align="center">Control Domótico</h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Projects Row -->
        <div class="row">
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/lampara.png" alt="">
                </a>
                <h3 align="center">
                    <a href="#">Lámpara 1</a>
                </h3>
                <form action="" method="post" align="center">
                    <input type="submit" name="led11" value="Encender" class="btn btn-warning">
                    <input type="submit" name="led10" value="Apagar" class="btn btn-danger">
               </form>
            </div>
           <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/lampara.png" alt="">
                </a>
                <h3 align="center">
                    <a href="#">Lámpara 2</a>
                </h3>
                <form action="" method="post" align="center">
                    <input type="submit" name="led21" value="Encender" class="btn btn-warning">
                    <input type="submit" name="led20" value="Apagar" class="btn btn-danger">
               </form>
            </div>
            <div class="col-md-4 portfolio-item">
                <a href="#">
                    <img class="img-responsive" src="img/lampara.png" alt="">
                </a>
                <h3 align="center">
                    <a href="#">Lámpara 3</a>
                </h3>
                <form action="" method="post" align="center">
                    <input type="submit" name="led31" value="Encender" class="btn btn-warning">
                    <input type="submit" name="led30" value="Apagar" class="btn btn-danger">
               </form>
            </div>
        </div>
        <!-- /.row -->

        <hr>

       
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; <a href="">HecMundo</a></p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php
if ($_POST[led11]) { 
   $a- exec("python /home/pi/scripts/LED11.py");
   echo $a;
  }

  if ($_POST[led10]) { 
   $a- exec("python /home/pi/scripts/LED10.py");
   echo $a;
  }

  if ($_POST[led21]) { 
   $a- exec("python /home/pi/scripts/LED21.py");
   echo $a;
  }

  if ($_POST[led20]) { 
   $a- exec("python /home/pi/scripts/LED20.py");
   echo $a;
  }

  if ($_POST[led31]) { 
   $a- exec("python /home/pi/scripts/LED31.py");
   echo $a;
  }

  if ($_POST[led30]) { 
   $a- exec("python /home/pi/scripts/LED30.py");
   echo $a;
  }
  ?>