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
			<h1>Registration Form</h1>
			<form>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Name<red>*</red></div>
				<div class="curight pn"><input class="input" type="text" name="textbox" required placeholder="write name"></div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Email<red>*</red></div>
				<div class="curight pn"><input class="input" type="email" name="dob" required placeholder="write email address"></div>
			</div>	
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Phone<red>*</red></div>
				<div class="curight pn"><input class="input" type="text" name="phone" required placeholder="write phone number"></div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Age</div>
				<div class="curight pn"><input class="input" type="number" name="age" required placeholder="write age"></div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Date Of Birth<red>*</red></div>
				<div class="curight pn"><input class="input" type="date" name="dob" required placeholder="write date of birth"></div>
			</div>	
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Gender<red>*</red></div>
				<div class="curight pn"><input  type="radio" name="gender" value="m" required >MALE
											<input type="radio" name="gender" value="f" required >FEMALE</div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Category<red>*</red></div>
				<div class="curight pn"><input  type="checkbox" name="category" required>Gen
				<input type="checkbox" name="category" required>SC/ST<input type="checkbox" name="category" required>OBC</div>
			</div>	
			<div class="rikita" style="display:flex;">
				<div class="culeft" >Phone<red>*</red></div>
				<div class="curight pn"><input class="input" type="text" name="phone" required placeholder="write phone number"></div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" >City</div>
				<div class="curight pn">
					<select name="city" class="input">
						<option value="0" disabled selected>Select City</option>
						<option value="1">Jodhpur</option>
						<option value="2">Jaipur</option>
					</select>
				</div>
			</div>
			<div class="rikita" style="display:flex;">
				<div class="culeft" ></div>
				<div class="curight pn"><input class="button" style="width:100px;" type="submit" name="submit" value="submit">
							<input class="button" style="width:100px;" type="reset" name="reset" value="reset"></div>
			</div>
				
	</div>

	<?php
	include("footer.php");
?>
</div>

</body>
</html>