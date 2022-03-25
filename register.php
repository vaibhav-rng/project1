<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles.css">
        <script>
            var val=""
            function fun()
            {
               val=document.getElementById("myText").value
            }
         </script>
         <style>
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
    
    <body style=" background-color:#3F485B">
    <div class="navi">
        <nav>
            <a href="home.html">Home</a>
            <a href="register.php">TAKE QUIZ</a>
            <a href="information.html">LEARN</a>
            <a href="learn.html">SIMULATION</a>
            <a href="about.html">ABOUT US</a>
            <div class="animation start-home"></div>
        </nav>
    </div>
        <h1 style="text-align:center;font-size:110px;color:white;margin-bottom:-200px">Array Quiz</h1>
    <div class="container">   
        <div class="box">
          <h1 style="font-family: monospace; text-align:middle">hello!! Guest</h1>
          <input type="text" class="textbx" placeholder="Enter your Name" style="text-align: center;" id="myText" >
          <a  href="level.php" onclick="fun();location.href=this.href+'?name='+val;return false"  style="background-color:black; display: block; width:60px;margin-left: 195px; margin-top: 20px; margin-bottom: 22px;text-decoration:none" class="btn">Enter</a>
    </div>
       </div>
     
    </body>
</html>