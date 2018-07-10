
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerala Blasters Army| ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">  
	<link rel="stylesheet" href="assets/css/styles.css">

</head>

<body><img src="assets/img/HEADER.jpg">

<div class="container-fluid">
<div class="row">
	<div class="col-sm-2">
	<h2>DASHBOARD</h2>
	<ul id="Side_menu" class="nav nav-pills nav-stacked">
		<li><a href="admin.php"><span class="glyphicon glyphicon-th"></span>&nbspDASHBOARD </span></a></li>
		<li><a href="Manage_admin.php"><span class="glyphicon glyphicon-user"></span>&nbspManage Admins</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp New Article</a></li>
		<li class="active"><a href="carousel.php"><span class="glyphicon glyphicon-picture"></span>&nbspCarousel</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbspFixture</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbspLog out</a></li>

	</ul>
	
	</div><!--   Ending of Side area-->
	<div class="col-sm-10">
	<h4>Carousel</h4>
	
             <?php
  include('dbconfig.php'); 
if(isset($_POST['submit'])){ // Fetching variables of the form which travels in URL
$img_link = $_POST['img_link'];
if($img_link !=''){
//Insert Query of SQL
$querry="INSERT INTO `Carousel` (`carousel_id`, `carousel_link`) VALUES (NULL, '$img_link')";
$result = mysqli_query($conn, $querry); 
echo "<div class=\"alert alert-success\"><strong>Success!</strong> Data Inserted Succesfully.</div>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}
mysqli_close($conn); // Closing Connection with Server
?>

<a href="carousel.php" type="button" class="btn btn-success">Click to add another Carousel</a>
	</div><!-- Ending of row-->



</div><!--ending of Container-->

        
   
    <script src="assets/js/jquery.min.js"></script>
    <!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets/js/countdown.js"></script>
</body>

</html>



