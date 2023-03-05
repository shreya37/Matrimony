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
        <li class="current-page">FAQ</li>
     </ul>
   </div>
   <dl class="faq-list">
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How to register on Marital?</h4>
	</dt>
	<dd>
	<h4 class="marker1">A.</h4>
	<p class="m_4"> Register on Marital for free by providing necessary details.</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>What are some of the top-notch safety measures in Marital</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">At Bharat Matrimony, we always prioritize your safety first. When it comes to your safety we are #AsCaringAsFamily.
Who can see me™ - You can control who views your profile and contacts you from BharatMatrimony.com
SecureConnect™ - Receive calls from prospects without revealing your mobile number</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>What are the features of Marital?</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">Search for matches by religion, city, community, education and many other specific parameters
View complete profile details, photos, and contact matches you like
Connect instantly with your matches through our Free Video Call feature
Discover matches based on your horoscope/kundli</p>
	</dd>
	<dt class="faq-list_h">
	<h4 class="marker">Q?</h4>
	<h4>How can i upload photos in the website</h4>
	</dt>
	<dd>
	<h4 class="marker">A.</h4>
	<p class="m_4">Login using your matrimony id and password. Click on edit profile section after that click on upload photos section then choose the location of the image </p>
	</dd>
   </dl>
  </div>
</div>


<?php include_once("footer.php");?>

</body>
</html>	