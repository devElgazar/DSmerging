<?php
//validation
$error_fields= array();
if(! (isset ($_POST['name']) && !empty($_POST['name']))){
	$error_fields[] = "name";
}
if(! (isset ($_POST['email']) && filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL) )){
$error_fields[] = "email";
}
if(! (isset ($_POST['password']) && strlen($_POST['password']) > 5)){
$error_fields[] = "password";
}

if($error_fields){
header("Location: form.php?error_fields=".implode(",", $error_fields));
exit;
}

//Connect to DB
$conn = mysqli_connect("localhost", "root", "", "data");
if(! $conn){
echo mysqli_connect_error();
exit;
}

//Escape any sepcial characters to avoid SQL Injection
$name = mysqli_escape_string($conn, $_POST['name']);
$email = mysqli_escape_string($conn, $_POST['email']);
$password = mysqli_escape_string($conn, $_POST['password']);
$gender = mysqli_escape_string($conn, $_POST['gender']);

//Insert the data
$query = "INSERT INTO `users` (`name`, `email`, `password`, `gender`) VALUES
 ( '".$name."', '".$email."', '".$password."', '".$gender."')";

?>

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
    <title>Tagerly || Success</title>
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
        if (mysqli_query($conn, $query)){
			echo '<p><h1 class="text">Thank you!</h1><hr/>
			<h2>your information has been saved<p><br/></h2>';
			
		
		} else {
			echo mysqli_error($conn);
			}
			
			//Close the connection
			mysqli_close($conn);
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







			
			