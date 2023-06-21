<html>
<head>
<title>webpage</title>
<link href="style.css" rel="stylesheet">
</head>
<body bgcolor="grey">
<div class="outer">
<?php
        include("header.php");
        include("menubar.php");
    ?> 
	<div class="slider"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28618.196246419986!2d72.98796616931153!3d26.28519886783662!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39418e7e0d255cf3%3A0x5ac5174a1431e729!2sLucky%20Institute%20of%20Professional%20Studies!5e0!3m2!1sen!2sin!4v1686372173668!5m2!1sen!2sin" width="1200" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
	<div class="main">
		<div class="mleft">
			<a href="home.php"><div class="lmenu"><b>H</b>ome</div></a>
			<a href="aboutus.php"><div class="lmenu"><b>A</b>bout us</div></a>
			<a href="courses.php"><div class="lmenu"><b>C</b>ourses</div></a>
			<a href="gallery.php"><div class="lmenu"><b>G</b>allery</div></a>
			<a href="contactus.php"><div class="lmenu"><b>C</b>ontact us</div></a>
			<a href="enquiry.php"><div class="lmenu"><b>E</b>nquiry</div></a>	
		</div>
		<div class="mright">
			<h1><b>Lucky Institute</b></h1>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Address</div><div class="curight">Kamla Nehru Nagar, First Extension Jodhpur (Raj.)</div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >E-mail</div><div class="curight">lssjodhpur@yahoo.co.in</div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Phone</div><div class="curight">+91-97842-11113 +91-0291-2750260</div>
			</div>
		</div>
	</div>
    <?php
        include("footer.php");
    ?>
</div>

</body>
</html>