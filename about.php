<?php include_once("includes/basic_includes.php");?>
<?php include_once("functions.php"); ?>

<!DOCTYPE HTML>
<html>
<head>
<title>Find Your Perfect Partner
</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
</head>
<body>
<!-- ============================  Navigation Start =========================== -->
 <?php include_once("includes/navigation.php");?>
<!-- ============================  Navigation End ============================ -->
<div class="grid_3">
  <div class="container">
   <div class="breadcrumb1">
     <ul>
        <a href="index.php"><i class="fa fa-home home_1"></i></a>
        <span class="divider">&nbsp;|&nbsp;</span>
        <li class="current-page">About</li>
     </ul>
   </div>
   <div class="about">
   	  <div class="col-md-6 about_left">
   	  	<img src="images/a3.jpg" class="img-responsive" alt=""/>
   	  </div>
   	  <div class="col-md-6 about_right">
   	  	<h1>About us</h1>
   	  	<p>Marital, is one of the leading provider of online matchmaking services delivers matchmaking services to users in India and the Indian diaspora through its websites, mobile sites and mobile apps complemented by on-the-ground network of 10+ retail centres in India. It has been ranked as one of the most trusted online matrimony.
Marital goes beyond matchmaking services by providing marriage services. With a strong leadership in online matrimony, the company has been expanding into the highly unorganised $55 billion marriage services Industry.

India's largest and most trusted wedding services marketplace offers over 10,000 verified wedding service providers with over 15,000 weddings planned so far.
The company provides both matchmaking and marriage related services through websites, mobile sites and mobile apps and is also complemented by 70+ company-owned retail outlets.
With a strong leadership in online matrimony, the company has been expanding into the highly unorganised $55 billion marriage services Industry. The goal is to build a billion dollar revenue company and a long lasting institution with a legacy for generations to come.</p>
   	  </div>
   	  <div class="clearfix"> </div>
   </div>
  </div>
</div>
<?php include_once("footer.php");?>

</body>
</html>	