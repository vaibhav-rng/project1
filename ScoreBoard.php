<?php
    require  'questionController.php';
    $score=getscore();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LeaderBoard</title>
    <style>
        html,body{
             height: 100%;
                }
        body {
            background-color: rgb(201, 165, 201);
        }

        .h1 {
            margin-left: 450px;
            font-style: italic;
            color: white;
            font-size: 72px;
        }

        .container {
            background-color: white;
            width: 678px;
            margin-left: 286px;
            border-radius: 18px;
            cursor: pointer;
            margin-top: -38px;
        }
        .topn:hover {
            background-color: rgb(139, 78, 139);
            cursor: pointer;
            border-radius: 10px;
            color: white;
        }
        th {
            padding: 20px;
            font-size: 30px;
            color: indigo;
        }

        td {
            /* margin-left: 15px; */
            font-size: 20px;
            margin-top: 20px;
            /* cellspacing:15px; */
        }
        td:hover{
            background-color:black;
            color:white;
        }
        /* table{
            border: ;
        } */
        .container2 {
            width: 496px;
            height: 60px;
            margin-left: 24px;
            margin-top: 30px;
            border-radius: 18px;
        }
        table,th,td{
            
            margin-left: 8px;
            margin-top: 20px;
            text-align: center;
            border-radius: 10px;
            padding: 20px;
            border-collapse: separate;
            border-spacing: 5px;  
        }
        .topn {
           
            float: left;
            padding: 5px;
            text-align: center;
            font-size: 22px;
            margin-left: 15px;
            font-family: monospace;
            font-weight: 100;
            margin-top: 2px;
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

<body style="background-color:#3F485B">

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
    <!-- <div style="background-color: rgb(201, 165, 201); height: 40px;margin-bottom: -50px; border-radius: 10px;  border: 2px solid white;">
        <span onclick="window.location.href='./register.html'" class="topn">Home</span>
        <span class="topn">Learn</span>
        <span class="topn">About us</span>
        <span onclick="window.location.href='./level.html'" class="topn">Take Quiz</span>
        <span onclick="window.location.href='./learn.html'" class="topn">Simulation</span>
        <span class="topn">contact us</span>
    </div>   -->
    
    <h1 class="h1">ScoreBoard</h1>
    <div class="container">
        <table>
            <tr>
                <th>Rank</th>
                <th>Performers</th>
                <th>Difficulty</th>
                <th>Score</th>
            </tr>
            <?php
            function sortbyscore($a, $b) {
                return $a['scored'] < $b['scored'];
            }
                usort($score,'sortbyscore');
                $rank=0
            ?>
            <?php foreach($score as $score): ?>
                
                <tr>
                    <td><?php ; echo $rank+=1;  ?></td>
                    <td> 🙍‍♂️ <?php echo $score['name']?></td>
                    <td><?php echo $score['difficulty']?></td>
                    <td><?php echo $score['scored']?></td>
                </tr>
            <?php endforeach?>

        </table>
    </div>
</body>

</html>