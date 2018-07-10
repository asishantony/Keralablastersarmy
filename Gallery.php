<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerala Blasters Army</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Gallery.css">

</head>

<body><img class="img-rounded img-responsive" src="assets/img/HEADER.jpg">
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a href="index.php">HOME </a></li>
					<li role="presentation"><a href="aboutus.html">ABOUT US </a></li>
                    <li role="presentation"><a href="team.html">TEAMS </a></li>
                    <li class="active" role="presentation"><a href="Gallery.php">Gallery</a></li>
                    <li role="presentation"><a href="contactus.html">CONTACT US </a></li>
                </ul>
        </div>
        </div>
    </nav>

 <?php include('dbconfig.php'); ?>           
<?php
$querry = "SELECT * FROM `gallery` ORDER BY `gallery`.`gallery_id` DESC ";
$result = mysqli_query($conn, $querry); ?>
     <div class="container gallery-container">

    <h1> Gallery</h1>
    
    <div class="tz-gallery">
      <div class="row">
<?php   if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {?>
         <div class="col-sm-12 col-md-4">
                <a class="lightbox" href=<?php echo $row["gallery_img_link"]?>>
                <img src="<?php echo $row["gallery_img_link"]?>" alt=<?php echo $row["gallery_alttext"]?>>
                </a>
        </div> 
     
<?php  }
}
else {
    echo "0 results";
}
?>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>

</body>

</html>