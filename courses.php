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
	<div class="slider"><img src="images/slider.jpg" width=1190 height=390></div>
	<div class="main">
		<div class="mleft">
			<a href="home.php"><div class="lmenu" style="margin:50px 0 0 50px;"><b>H</b>ome</div></a>
			<a href="aboutus.php"><div class="lmenu"><b>A</b>bout us</div></a>
			<a href="courses.php"><div class="lmenu"><b>C</b>ourses</div></a>
			<a href="gallery.php"><div class="lmenu"><b>G</b>allery</div></a>
			<a href="contactus.php"><div class="lmenu"><b>C</b>ontact us</div></a>
			<a href="enquiry.php"><div class="lmenu"><b>E</b>nquiry</div></a>	
		</div>
		<div class="mright">
			<h1><b><i>Courses</i></b></h1>
			<div class="course">
				<img src="images/Capture.JPG" width="900" height="700">
			</div>			

				
		</div>
	</div>
	<?php
	include("footer.php");
?>
</div>

</body>
</html>