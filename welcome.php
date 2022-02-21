<!DOCTYPE html>
<html lang="en">
<head>
	
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Lalezar&family=Lateef&family=Noto+Sans+Arabic:wght@300&family=Tajawal:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lalezar&display=swap" rel="stylesheet">   
	<link rel="stylesheet" href="css/style1.css">
	
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script> 
    <title>Tagerly</title>
    <link rel = "icon" href = 
    "img/8.png" 
            type = "image/x-icon">
</head>
<body>
<nav class="navbar  navbar-default" role="navigation">

        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand " style="color: rgb(75, 61, 30); font-size: 35px;" href="#">
              
                <strong><span style="color:orange; ">T</span>agerly</strong></a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
          <!--  <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
              </form>-->
            
            <ul class="nav navbar-nav navbar-right">
              <li class="item"><a href="#">
                الرئيسية</a></li>
              <li class="item"><a href="#">
                الخدمات</a></li>
              <li class="item"><a href="#">
                معلومات عنا</a></li>
              <li class="item"><a href="#">
                انضم الينا</a></li>
              <li class="item"><a href="#">
                آراء العملاء</a></li>
              <li class="item"><a href="#">
                مركز المساعدة</a></li>
            </ul>
            
           
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

	<div class="container text-center welcome">

        <?php
        session_start();
        if(isset($_SESSION['id'])){
        	echo ' <p><strong class="text"> Welcome You Again To Our Website  <br/></strong>
			<h1><span>T</span>agerly </h1>
			
        	</p>';
        } else {
        	header("Location: login.php");
        	exit;
        }
        	?>
	</div>
       <div class="container text-center">
           <br> <a href="index.html"><button class="btn btn-success" style="font-size:30px;"> Home </button></a>
        	<br/> <br/><a href="logout.php"><button class="btn btn-danger" style="font-size:30px;">Logout</button> </a><br/>
       </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"> </script>
</body>
</html>



