
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
		<li><a href="index.php"><span class="glyphicon glyphicon-th"></span>&nbspDASHBOARD </span></a></li>
		<li><a href="Manage_admin.php"><span class="glyphicon glyphicon-user"></span>&nbspManage Admins</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-list-alt"></span>&nbsp New Article</a></li>
		<li class="active"><a href="carousel.php"><span class="glyphicon glyphicon-picture"></span>&nbspCarousel</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-calendar"></span>&nbspFixture</a></li>
		<li><a href="#"><span class="glyphicon glyphicon-log-out"></span>&nbspLog out</a></li>

	</ul>
	
	</div><!--   Ending of Side area-->

	<div class="col-sm-10 heading"><h4 >Carousel</h4></div>
	<div class="col-sm-10">
        <form action="insert.php" method="post">
            <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-link"></i></span>
              <input id="img_link" type="text" class="form-control" name="img_link" placeholder="Image Link">
            </div>
            <br>          
            <input type="submit" name="submit" class="btn btn-info" value="Submit Button">

        </form>
   </div> 
   <div class="col-sm-10"><!--start of display area--> 
   	<?php
   	include ("../includes/dbconfig.php");
   $querry = "SELECT * FROM `Carousel` ORDER BY `Carousel`.`carousel_id` DESC  LIMIT 4";
   $result = mysqli_query($conn, $querry); 
     if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
        while($row = mysqli_fetch_assoc($result)) {?>
        	<div class="container-fluid">
                     <br> 
        <img class="img-responsive" src= <?php echo $row["carousel_link"]?>>
      <br>
     	</div>
<?php  }
}
else {
    echo "0 results";
}
?>

</div><!-- Ending of row-->
</div><!--ending of Container-->



        
   
    <script src="assets/js/jquery.min.js"></script>
    <!--<script src="assets/bootstrap/js/bootstrap.min.js"></script>-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="assets/js/countdown.js"></script>
</body>

</html>