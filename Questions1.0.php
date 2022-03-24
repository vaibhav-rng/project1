<?php
    require 'questionController.php';
    $question=getQuestion();
	$question1=getQuestion();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Questions Page</title>
	<link rel="stylesheet" type="text/css" href="questions.css">
	
	<style>
		* {box-sizing: border-box}
		body {font-family: Verdana, sans-serif; margin:0}

		.mySlides 
			{
  			display: none
			}
	
		.slideshow-container
			{
  			max-width: 1000px;
 			position: relative;
  			margin: auto;
			}

		.prev, .next
			{
  			cursor: pointer;
  			position: relative;
 			width: auto;
			border:none;
  			padding: 16px;
			border-radius:10px;
  			color: black;
  			font-weight: bold;
  			font-size: 18px;
			top:-210px;
			}


		.next 
			{
			background-color:#85C88A;
			color:white;
  			left: 900px;
			padding: none;
			}
		.prev
		{
			background-color:#B8405E;
			color:white;
			right:80px;
		}
		.btn1
		{
			background-color:black;
			color:white;
		}
		.btn1:hover
		{
			background-color:#82AAC9;
			color:black;
		}
		input[type="radio"]
		{
			position:absolute;
			right:10px;
			width:1000px;
			height:100px;
			background-color:red;
		}
		input[type="radio"]:checked+label
		{

			color:rgb(0,200,0);
		}


		nav {
	margin: 27px auto 0;
	position: relative;
	width: 590px;
	height: 50px;
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
	border-radius: 8px;
}
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 210px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}


		</style>

</head>
<body style="background-color: #3F485B;">
	
	<br>
	<div class="navi">
		<nav>
            <a href="home.html">Home</a>
            <a href="register.php">TAKE QUIZ</a>
            <a href="">LEARN</a>
            <a href="learn.html">SIMULATION</a>
            <a href="about.html">ABOUT US</a>
            <div class="animation start-home"></div>
        </nav>
    </div>

	<div  style="padding-top: 20px;">
		<label style=" position:absolute;margin-left:20px;color:#361500;background-color:#ebebec; border-radius:10px" id="UserName" name="un" class="SecNav"><span style="color:#361500">Hi,</span><?php echo $_GET['name'] ?></label>
	
		<form id="formSubmit" method="post" action="scoreboardController.php">
			<input type="hidden" id="scoredForm" name="scored" value=''>
			<input type="hidden" id="nameForm" name="name" value=<?php echo $_GET['name'] ?>>
			<input type="hidden" id="nameForm" name="difficulty" value=<?php echo $_GET['val'] ?>>

			<input type="submit"   onclick="onSubmit()"
			style="cursor:pointer;margin-left:1100px; background-color: #85C88A; font-size:xx-large; padding:11px; padding-left: 10px; padding-right: 10px;border:none; border-radius: 10px; color: white; font-family: monospace;">	 
	    	</input>
		</form>

	</div>
	<?php foreach($question as $question):?>
	<?php if ($question['level']==$_GET['val']) { ?>
			<div  class="slideshow-container">
  				<div  class="mySlides">
				<div id='center'>
					<div style="postion:absolute;font-size:x-large;color:black;padding-top:30px;font-family: monospace;"><?php echo $question['question']?></div>
				<form action="" method="post">
				  <div  style="padding:10px;margin-top:30px">
				  	  <div class="btn1" style="cursor:pointer; font-family: monospace;margin-bottom:20px;padding:20px;border:none;border-radius:10px">
				  		<input  style="opacity:0;"  onclick="displayradioValue(this.value ,<?php echo $question['id']?>);plusSlides(1);" name="btn" id="r1" type="radio"  value="<?php echo $question['o1']?>"></input>
					    <label   for="r1"><?php echo $question['o1']?></label>
					  </div> 
					  <div class="btn1" style="cursor:pointer; font-family: monospace;margin-bottom:20px;padding:20px;border:none;border-radius:10px">
						<input  style=" opacity:0;" onclick="displayradioValue(this.value,<?php echo $question['id']?>);plusSlides(1);" name="btn" id="r2" type="radio"  value="<?php echo $question['o2']?>"></input>
					    <label  for="r2"><?php echo $question['o2']?></label>
					  </div>
					  <div class="btn1" style="cursor:pointer; font-family: monospace;margin-bottom:20px;padding:20px;border:none;border-radius:10px">
					    <input class="btn1" style="opacity:0;" onclick="displayradioValue(this.value,<?php echo $question['id']?>);plusSlides(1);" name="btn" id="r3" type="radio"  value="<?php echo $question['o3']?>"></input>
					    <label  for="r3"><?php echo $question['o3']?></label>
					  </div>
					  <div class="btn1" style="cursor:pointer; font-family: monospace;margin-bottom:20px;padding:20px;border:none;border-radius:10px">
						<input  style="opacity:0;" onclick="displayradioValue(this.value,<?php echo $question['id']?>);plusSlides(1);;" name="btn" id="r4" type="radio"  value="<?php echo $question['o4']?>"></input>
					 	 <label  for="r4"><?php echo $question['o4']?></label>
					  </div>
				  </div>
				</div>
				  </form>
				 
				</div>
				

<?php } ?>
<?php endforeach?>

<a class="prev" id="2"  onclick="minusSlides(-1);"><< Previous</a>
<a class="next" id="1" onclick="plusSlides(1);">Next >></a>


	<script>

		function bg(n)
		{
		 var opt=document.getElementsByClassName("btn1")
		 
		 console.log(document.getElementsById("7"));

		}

		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n)
		{
		var slides = document.getElementsByClassName("mySlides");
		if(slideIndex<slides.length)
		{
		 showSlides(slideIndex += n);
		}
		}
		function minusSlides(n)
		{
		 showSlides(slideIndex += n);
		}

		function currentSlide(n) 
		{
  		showSlides(slideIndex = n);
		}

		function showSlides(n) {
  		var i;
  		var slides = document.getElementsByClassName("mySlides"); //array

  		if (n >= slides.length)
  		{
			document.getElementById("1").style.display="none"
			
 		}
		 if (n != slides.length)
  		{
			document.getElementById("1").style.display="inline"
			document.getElementById("2").style.display="inline"
			document.getElementById("1").style.left="750px"
 		}  
  		if (n == 1) 
  		{
			document.getElementById("2").style.display="none"  
			document.getElementById("1").style.left="913px" 
  			slideIndex = 1
  		}
  		for (i = 0; i < slides.length; i++)
  		{
  		    slides[i].style.display = "none";  
  		}
  			slides[slideIndex-1].style.display = "block"; 
		}

	
		const score = {}

		function displayradioValue(browser,id) 
		{
			score[id]=browser
		}

		function displayArray()
		{
			console.log(score)
		}
		
		function onSubmit()
		{
			 window.score1=0
			<?php foreach($question1 as $question1):?>
			<?php if ($question1['level']==$_GET['val']) { ?>
				for(const key in score)
				{	
					if( key==<?php echo $question1['id']?> && score[key]=="<?php echo $question1['correct']?>" )
					{
						 window.score1+=1; 
					}
				}	
			<?php } ?>
			<?php endforeach;;?>
			document.getElementById("scoredForm").value = window.score1;

		}
	</script>
</body>
</html>