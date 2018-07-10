<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kerala Blasters Army</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Article-List.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Footer-with-button-logo.css">

	
 <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
          (adsbygoogle = window.adsbygoogle || []).push({
            google_ad_client: "ca-pub-6884656118714853",
            enable_page_level_ads: true
          });
        </script>
       
	
</head>


<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<img class="img-rounded img-responsive" src="assets/img/HEADER.jpg" data-bs-hover-animate="pulse">
  
  <div class="container-fluid">
    <div class="row next_match">
        <div class="col-md-4-">
            <p>NEXT MATCH</p>
        </div>
    </div>




  </div>
  <nav class="navbar navbar-default"><!-- NAVIGATION PANEL START-->
        <div class="container-fluid">
            <div class="navbar-header"><button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button></div>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="#">HOME </a></li>
                    <li role="presentation"><a href="aboutus.html">ABOUT US </a></li>
                     <li role="presentation"><a href="Gallery.php">Gallery </a></li>
                    <li role="presentation"><a href="team.html">TEAMS </a></li>
                    <!--<li role="presentation"><a href="fixture.html">FIXTURES </a></li>-->
                    <li role="presentation"><a href="contactus.html">CONTACT US </a></li>
					
                </ul>
        </div>
        </div>
    </nav><!-- NAVIGATION PANEL END-->


    <!-- CAROUSEL PANEL START-->
    
    <?php include('../includes/dbconfig.php'); ?> 
    <?php
$querry = "SELECT * FROM `Carousel` ORDER BY `Carousel`.`carousel_id` DESC  LIMIT 4";
$result = mysqli_query($conn, $querry); 
 
 $storeArray = array();

    while ($row = mysqli_fetch_array($result)) {
          array_push($storeArray,$row['carousel_link']);
    }

    ?>
    <div class="carousel slide" data-ride="carousel" id="carousel-1">
        <div class="carousel-inner" role="listbox">
            <div class="item active"><img alt="Slide Image" src= <?php echo  $storeArray[0] ?>></div>
            <div class="item"><img alt="Slide Image" src= <?php echo  $storeArray[1] ?>></div>
            <div class="item"><img alt="Slide Image" src= <?php echo  $storeArray[2] ?>></div>
            <div class="item "><img alt="Slide Image" src= <?php echo  $storeArray[3] ?>></div>
        </div>
        <div><a class="left carousel-control" href="#carousel-1" role="button" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i><span class="sr-only">Previous</span></a><a class="right carousel-control" href="#carousel-1" role="button" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3" class="active"></li>
            </ol>
    </div>

    <!-- CAROUSEL PANEL END-->


    <!-- ARTICLE PANEL START-->
    <div class="article-list">
        <div class="container" data-aos="fade-up" data-aos-duration="300" data-aos-delay="300">
            <div class="intro">
                <h2 class="text-center">Latest News</h2>
            </div>
            
 <?php include('dbconfig.php'); ?>           
<?php
$querry = "SELECT * FROM Articles ORDER BY Article_no DESC LIMIT 3";
$result = mysqli_query($conn, $querry); ?>
 <div class="row articles">
<?php   if (mysqli_num_rows($result) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($result)) {?>
        
     <div id="article">
                <div class="col-md-4 col-sm-6 item"><a href=<?php echo $row["Article_link"]?>><img class="img-responsive" src= <?php echo $row["Article_img"]?>></a>                 
		<h3 class="name"><?php echo $row["Article_head"]?></h3>
                    <p class="description"><?php echo $row["Article_content"]?></p><a href=<?php echo $row["Article_link"]?> class="btn btn-primary btn-primary action">Read More  <span class="glyphicon glyphicon-hand-right"></span></a></div>
			</div>   
     
<?php  }
}
else {
    echo "0 results";
}
?>
</div>
 <!-- ARTICLE PANEL END-->


 <!-- fOOTER PANEL START-->
<div class="fb-page" data-href="https://www.facebook.com/armyofkeralablasters/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/armyofkeralablasters/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/armyofkeralablasters/">KERALA BLASTERS ARMY FANS CLUB</a></blockquote>
</div>
       <!-- FOOTER PANEL END-->   

      <!-- JS INTIALIZATIONS START-->    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/Pop-Out-Vertical-Nav-w-Footer--Social-Links--1.js"></script>
	<script src="assets/js/newtab.js"></script>

     <!-- JS INTIALIZATIONS END-->    
</body>

</html>